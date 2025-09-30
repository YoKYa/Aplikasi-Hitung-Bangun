<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
    <div class="text-md text-white">Luas Persegi</div>
    <div style="height: 200px; width: 200px; background-color: white; display: flex; justify-content: center; align-items: center; border: 1px solid #ccc; border-radius: 8px;">
        
    </div>

    <form class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Masukkan Panjang Sisi</label>
            <input wire:model="sisi" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
        </div>
        <flux:button wire:click="hitung()"  class="mt-2 w-full">
                {{ __('Cek Hasil') }}
        </flux:button>
        @if ($sisi != 0)
            <div class="text-md mt-5">Hasilnya Yaitu : {{ $hasil }}</div>
        @endif
    </form>

</div>
