<?php

namespace App\Livewire\Booking;

use Livewire\Component;
use App\Models\Place;
use App\Models\Booking;
use App\Http\Requests\Booking\SubmitBookingRequest;
use Illuminate\Support\Carbon;

class Form extends Component
{
    public $form = [];
    public $placeId;
    public $price = 0;
    public $hourlyRate = 0; // Цена за 1 час

    protected $listeners = ['setPlace' => 'setPlace'];

    public function setPlace($id)
    {
        $this->placeId = $id;
        $this->loadPlace();
    }

    public function loadPlace()
    {
        $place = Place::find($this->placeId);
        if ($place) {
            $this->hourlyRate = $place->price_per_hour;
        }
    }

    public function updatedFormStartTime()
    {
        $this->updatePrice();
    }

    public function updatedFormEndTime()
    {
        $this->updatePrice();
    }

    public function updatePrice()
    {
        if (!isset($this->form['start_time'], $this->form['end_time'])) {
            $this->price = 0;
            return;
        }

        try {
            $start = Carbon::createFromFormat('H', $this->form['start_time']);
            $end = Carbon::createFromFormat('H', $this->form['end_time']);

            if ($start->lt($end)) {
                $this->price = $this->hourlyRate * $start->diffInHours($end);
            } else {
                $this->price = 0;
            }
        } catch (\Exception $e) {
            $this->price = 0;
        }
    }

    public function save()
    {
        $validated = $this->validate((new SubmitBookingRequest())->rules());

        $start = Carbon::today()->setTimeFromTimeString($this->form['start_time'] . ':00');
        $end = Carbon::today()->setTimeFromTimeString($this->form['end_time'] . ':00');

        // Проверка пересечений
        $conflict = Booking::where('place_id', $this->placeId)
            ->overlap($start, $end)
            ->exists();

        if ($conflict) {
            $this->addError('form.start_time', 'Это место уже занято в выбранное время.');
            return;
        }

        Booking::create([
            ...$this->form,
            'place_id' => $this->placeId,
            'start_time' => $start,
            'end_time' => $end,
            'total_price' => $this->price,
            'status' => 'active',
        ]);

        $this->reset(['form', 'placeId', 'price']);
    }

    public function render()
    {
        return view('livewire.booking.form');
    }
}
