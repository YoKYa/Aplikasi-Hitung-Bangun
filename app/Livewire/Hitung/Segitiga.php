<?php

namespace App\Livewire\Hitung;

use App\Models\User;
use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Segitiga extends Component
{
    // Variabel Hitung
    public $alas, $tinggi, $hasil;
    
    // Hitung
    public function hitung() {
        $this->hasil = $this->alas * $this->tinggi /2;
        $this->store($this->hasil);
    }
    // Count
    protected function store($hasil){
        if (Recap::find( Auth::id())->count() == 0) {
            Recap::create([
                'count' => 1,
                'type' => "Segitiga",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }else{
            Recap::create([
                'count' => Recap::find( Auth::id())->count()+1,
                'type' => "Segitiga",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }
        
    }
    public function render()
    {
        return view('livewire.hitung.segitiga');
    }

}
