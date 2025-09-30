<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
    <div class="text-md text-white">Kubus</div>
    <div>
        <img width="200" src="https://cdn0-production-images-kly.akamaized.net/7QoVaoH2tpZaf2Sc4DSaLOaMhII=/500x500/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3518168/original/026826900_1626957470-KUBUSSS.jpg" alt="kubu">
    </div>

    <form class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Masukkan Panjang Sisi</label>
            <input wire:model="sisi" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
        </div>
        <flux:button wire:click="hitung()"  class="mt-2 w-full">
                {{ __('Cek Hasil') }}
        </flux:button>
        @if ($hasil != 0)
            <div class="text-md mt-5">Hasilnya Yaitu : {{ $hasil }}</div>
        @endif
    </form>

</div>
