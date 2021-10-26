<x-app-layout>
    <x-slot name="header">
        {{ __('Data Orang Tua') }}
    </x-slot>
    <div class="px-32">
        <div class="mt-10 mb-4">
            <a class="animate-pulse p-4 bg-blue-100 shadow-lg rounded-lg font-bold text-lg hover:bg-indigo-200" href="{{ route('tambah_orangtua') }}">Tambah Data
                <i class="animate-bounce fas fa-plus"></i>
            </a>
        </div>

        <table class="mt-10 min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Orangtua</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIK Orangtua</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ibu/Ayah</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Lahir</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Jenis Kelamin</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th> 
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($orangtua as $item)
                <tr class="bg-gray-200">
                    <td class="text-left py-3 px-4">{{$item->nama_orangtua}}</td>
                    <td class="text-left py-3 px-4">{{$item->nik_ortu}}</td>
                    <td class="text-left py-3 px-4">{{$item->ibu_atau_ayah}}</td>
                    <td class="text-left py-3 px-4">{{$item->tgl_lahir}}</td>
                    <td class="text-left py-3 px-4">{{$item->alamat}}</td>
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
