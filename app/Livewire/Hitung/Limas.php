<?php

namespace App\Livewire\Hitung;

use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Limas extends Component
{
    // Variabel
    public $sisi_a, $sisi_b,$tinggi,$hasil;
    // Fungsi Hitung
    public function hitung() // Menghitung Persegi
    {
        $this->hasil = ($this->sisi_a*$this->sisi_b)*$this->tinggi;
        $this->store($this->hasil);
    }
    // Count
    protected function store($hasil){
        if (Recap::find( Auth::id())->count() == 0) {
            Recap::create([
                'count' => 1,
                'type' => "Limas",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }else{
            Recap::create([
                'count' => Recap::find( Auth::id())->count()+1,
                'type' => "Limas",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }
    }
    public function render()
    {
        return view('livewire.hitung.limas');
    }
}
