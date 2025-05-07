<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Gallery extends Component
{
    public function getGalleryProperty()
    {
        return [
            'images' => \App\Models\Gallery::orderByDesc('created_at')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.section.gallery', [
            'images' => $this->gallery['images'],
        ]);
    }
}
