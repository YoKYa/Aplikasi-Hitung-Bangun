<?php

namespace App\Livewire\Hitung;

use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Lingkaran extends Component
{
    // Variabel
    public $jarijari,$hasil;
    // Fungsi Hitung
    public function hitung() // Menghitung Persegi
    {
        $this->hasil = 22/7*$this->jarijari*$this->jarijari;
        $this->hasil = number_format($this->hasil, 2); // 2 angka dibelakang koma
        $this->store($this->hasil);
    }
// Count
    protected function store($hasil){
        if (Recap::find( Auth::id())->count() == 0) {
            Recap::create([
                'count' => 1,
                'type' => "Lingkaran",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }else{
            Recap::create([
                'count' => Recap::find( Auth::id())->count()+1,
                'type' => "Lingkaran",
                'result' => $hasil,
                'user_id' => Auth::id()
            ]);
        }
    }
    // Menampilkan
    public function render()
    {
        return view('livewire.hitung.lingkaran');
    }
}
