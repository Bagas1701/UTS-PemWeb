<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendaftaranMurid;

class ShowDataPendaftaran extends Component
{

    public function render()
    {
        $pendaftarans = PendaftaranMurid::orderBy('created_at', 'desc')->get();

        return view('livewire.show-data-pendaftaran',[
            'pendaftarans' => $pendaftarans
        ]);
    }
}
