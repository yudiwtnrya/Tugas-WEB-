<x-app-layout>
    <x-slot name="header">
        {{ __('Daftar Keluarga') }}
    </x-slot>
    <div class="px-32">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                    
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" href="tel:622322662">622322662</td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" >
                        <button class="bg-blue-100 px-1 rounded-lg hover:bg-blue-300">edit</button>
                        <button class="bg-red-100 px-1 rounded-lg hover:bg-red-300">remove</button>
                    </td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Emma</td>
                    <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" >
                        <button class="bg-blue-100 px-1 rounded-lg hover:bg-blue-300">edit</button>
                        <button class="bg-red-100 px-1 rounded-lg hover:bg-red-300">remove</button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                    <td class="w-1/3 text-left py-3 px-4">Williams</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" >
                        <button class="bg-blue-100 px-1 rounded-lg hover:bg-blue-300">edit</button>
                        <button class="bg-red-100 px-1 rounded-lg hover:bg-red-300">remove</button>
                    </td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                    <td class="w-1/3 text-left py-3 px-4">Brown</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    <td class="text-left py-3 px-4" class="hover:text-blue-500" >
                        <button class="bg-blue-100 px-1 rounded-lg hover:bg-blue-300">edit</button>
                        <button class="bg-red-100 px-1 rounded-lg hover:bg-red-300">remove</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
   
</x-app-layout>
