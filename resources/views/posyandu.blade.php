<x-app-layout>
    <x-slot name="header">
        {{ __('Data Posyandu') }}
    </x-slot>
    <div class="px-32">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No Region</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Posyandu</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat Posyandu</th>          
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($posyandu as $item)
                <tr class="bg-gray-200">
                    <td class="text-left py-3 px-4">{{$item->no_region}}</td>
                    <td class="text-left py-3 px-4">{{$item->nama_posyandu}}</td>
                    <td class="text-left py-3 px-4">{{$item->alamat_posyandu}}</td>
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
