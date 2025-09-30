

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Sekolah
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomor
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipe
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->user->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $item->user->school }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->user->birthDate }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->user->address }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->user->telephone }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->user->email }}
                </td>
                  <td class="px-6 py-4">
                    {{ $item->type }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <flux:button wire:click="exportUsers()"  class="mt-2 w-full">
         {{ __('Download CSV') }}
    </flux:button>
</div>
