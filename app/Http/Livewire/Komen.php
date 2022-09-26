<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Netizen;

class Komen extends Component
{
    public $name;
    public $komentar;
    public function simpan()
    {
        $simpan = new Netizen();
        $simpan->name = $this->name;
        $simpan->komentar = $this->komentar;
        $simpan->save();
    }

    public function render()
    {
        return view('livewire.komen');
    }
}
