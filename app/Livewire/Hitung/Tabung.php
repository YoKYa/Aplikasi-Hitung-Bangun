<?php

namespace App\Livewire\Hitung;

use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Tabung extends Component
{
    // Variabel
    public $jarijari, $tinggi, $hasil;
    // Hitung
    public function hitung() {
        $this->hasil = 3.14*$this->jarijari*$this->jarijari*$this->tinggi;
        $this->store($this->hasil);
    }
    // Count
    protected function store($hasil){
        if (Recap::find( Auth::id())->count() == 0) {
            Recap::create([
                'count' => 1,
                'type' => "Tabung",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }else{
            Recap::create([
                'count' => Recap::find( Auth::id())->count()+1,
                'type' => "Tabung",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }
    }
    public function render()
    {
        return view('livewire.hitung.tabung');
    }
}
