<x-app-layout>
    <x-slot name="header">
        {{ __('Data Balita') }}
    </x-slot>

    <div class="px-32">
        <div class="mt-10 mb-4">
            <a class="animate-pulse p-4 bg-blue-100 shadow-lg rounded-lg font-bold text-lg hover:bg-indigo-200" href="{{ route('tambah_balita') }}">Tambah Data
                <i class="animate-bounce fas fa-plus"></i>
            </a>
        </div>

    <div class="px-32">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Balita</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">No Akta</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Lahir</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jenis Kelamin</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                    
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($balita as $item)
                <tr class="bg-gray-200">
                    <td class="text-left py-3 px-4">{{$item->nama_balita}}</td>
                    <td class="text-left py-3 px-4">{{$item->no_akta}}</td>
                    <td class="text-left py-3 px-4">{{$item->tgl_lahir_balita}}</td>
                    <td class="text-left py-3 px-4">{{$item->jenis_kelamin}}</td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" >
                        <button class="bg-blue-100 px-1 rounded-lg hover:bg-blue-300 font-bold">Edit</button>
                        <button class="bg-red-100 px-1 rounded-lg hover:bg-red-300 font-bold">Remove</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</x-app-layout>
