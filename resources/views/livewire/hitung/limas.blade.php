<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 20px;">
    <div class="text-md text-white">Limas</div>
    <div>
        <img width="200" src="https://quizizz.com/_media/quizzes/c07aa287-6599-416b-95f6-94d58624cc6c" alt="kubu">
    </div>
    <form class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Panjang Alas</label>
            <input wire:model="sisi_a" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Lebar Alas</label>
            <input wire:model="sisi_b" type="number" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Tinggi</label>
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
