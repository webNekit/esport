<?php

namespace App\Livewire\Booking;

use Livewire\Component;

class AddButton extends Component
{
    public $placeId;

    public function render()
    {
        return view('livewire.booking.add-button');
    }

    public function openModal()
    {
        $this->dispatch('setPlace', $this->placeId);
    }
}
