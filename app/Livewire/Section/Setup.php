<?php

namespace App\Livewire\Section;

use App\Models\Zone;
use Livewire\Component;

class Setup extends Component
{
    public $categoryId = null;

    public function getSetupProperty()
    {
        return [
            'zones' => Zone::all(),
            'setups' => \App\Models\Setup::query()->when($this->categoryId, function ($query) {
                    $query->where('zone_id', $this->categoryId);
                })->get(),
        ];
    }

    public function render()
    {
        return view('livewire.section.setup', [
            'zones' => $this->setup['zones'],
            'setups' => $this->setup['setups'],
        ]);
    }
}
