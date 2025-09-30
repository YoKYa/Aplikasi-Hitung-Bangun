<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
    <div class="text-md text-white">Luas Segitiga</div>
    <div style="height:0px;
			width:0px;
			border-bottom:solid 120px white;
			border-left:solid 80px transparent;
			border-right:solid 80px transparent;
			margin-bottom: 20px;">
    </div>

    <form class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Panjang Alas</label>
            <input wire:model="alas" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Ketinggian</label>
            <input wire:model="tinggi" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
        </div>
        <flux:button wire:click="hitung()"  class="mt-2 w-full">
                {{ __('Cek Hasil') }}
        </flux:button>
        @if ($hasil != 0)
            <div class="text-md mt-5">Hasilnya Yaitu : {{ $hasil }}</div>
        @endif
    </form>

</div>
