<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ekskul;

class ShowDataEkskul extends Component
{
    public function render()
    {
        $ekskuls = Ekskul::orderBy('created_at', 'desc')->get();
        return view('livewire.show-data-ekskul',[
            'ekskuls' => $ekskuls
        ]);
    }
}
