<?php

namespace App\Livewire\Place;

use App\Models\Place;
use Livewire\Component;

class Collection extends Component
{

    public function getCollectionProperty()
    {
        return [
            'places' => Place::where('is_active', true)->orderByDesc('created_at')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.place.collection', [
            'places' => $this->collection['places'],
        ]);
    }
}
