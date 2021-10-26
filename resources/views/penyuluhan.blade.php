<x-app-layout>
    <x-slot name="header">
        {{ __('Data Penyuluhan Balita') }}
    </x-slot>
    <div class="px-32">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIK Orangtua</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Orangtua</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Balita</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No Akta Balita</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Penyuluhan</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No Region Posyandu</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat Posyandu</th>          
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($penyuluhan as $item)
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
