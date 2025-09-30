<?php

namespace App\Livewire;

use App\Models\Recap;
use Livewire\Component;

class Dashboard extends Component
{
    public $total, $segitiga, $kubus, $limas, $lingkaran, $persegi, $tabung;
    public function mount(){
        $this->total = Recap::get()->count();
        $this->count();
    }
    public function count(){
        $this->segitiga = Recap::where('type', "Segitiga")->get()->count()/$this->total*100;
        $this->kubus = Recap::where('type', "Kubus")->get()->count()/$this->total*100;
        $this->limas = Recap::where('type', "Limas")->get()->count()/$this->total*100;
        $this->lingkaran = Recap::where('type', "Lingkaran")->get()->count()/$this->total*100;
        $this->persegi = Recap::where('type', "Persegi")->get()->count()/$this->total*100;
        $this->tabung = Recap::where('type', "Tabung")->get()->count()/$this->total*100;
    }
    
    public function render()
    {
        return view('livewire.dashboard');
    }
}
