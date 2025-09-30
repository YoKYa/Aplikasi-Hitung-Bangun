<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Recap;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Data extends Component
{
    public $data=[];
    public function mount()
    {
        $this->data = Recap::get();
    }
    public function exportUsers()
    {
            $filename = "Rekap.csv";
            $recaps = Recap::all(); // Ambil data dari database

            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ];

            $callback = function() use ($recaps) {
                $handle = fopen('php://output', 'w');
                // Tulis header CSV
                fputcsv($handle, ['Nama', 'Sekolah', 'Tanggal Lahir', 'Alamat', 'Telephone', 'Type']); // Ganti dengan nama kolom Anda

                // Tulis baris data
                foreach ($recaps as $recap) {
                    fputcsv($handle, [
                        $recap->user->name,
                        $recap->user->school,
                        $recap->user->birthDate,
                        $recap->user->address,
                        $recap->user->telephone,
                        $recap->type,
                        $recap->result,

                    ]);
                }
                fclose($handle);
            };

            return response()->stream($callback, 200, $headers);
    }

    public function render()
    {
        return view('livewire.data');
    }
}
