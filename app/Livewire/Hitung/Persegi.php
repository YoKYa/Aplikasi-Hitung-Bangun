<?php

namespace App\Livewire\Hitung;

use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Persegi extends Component
{
    // Variabel
    public $sisi,$hasil;
    // Fungsi Hitung
    public function hitung() // Menghitung Persegi
    {
        $this->hasil = $this->sisi*$this->sisi;
        $this->store($this->hasil);
    }
    // Count
    protected function store($hasil){
        if (Recap::find( Auth::id())->count() == 0) {
            Recap::create([
                'count' => 1,
                'type' => "Persegi",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }else{
            Recap::create([
                'count' => Recap::find( Auth::id())->count()+1,
                'type' => "Persegi",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }
    }
    // Menampilkan
    public function render()
    {
        return view('livewire.hitung.persegi');
    }
}
