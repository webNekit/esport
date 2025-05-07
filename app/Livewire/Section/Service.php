<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Service extends Component
{
    public function getServicesProperty()
    {
        return [
          'services' => \App\Models\Service::orderByDesc('created_at')->get(),
        ];
    }

    public function render()
    {
        return view('livewire.section.service', [
            'services' => $this->services['services'],
        ]);
    }
}
