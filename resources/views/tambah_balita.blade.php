<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Data Balita') }}
    </x-slot>
    <form action="" method="POST" class="lg:w-1/2 m-auto mt-16 ">
        @csrf
    <div class="bg-blue-50 shadow-xl rounded-lg p-6">
        <div class="text-xl font-bold rounded-lg">
            <label class="">Nama Balita</label>
            <div class="">
                <input class="w-full" type="text" name="nama_balita" placeholder="Masukkan nama Balita">
                    @error('nama_balita')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
            </div>

        </div>

        <div class="text-xl font-bold rounded-lg">
            <label>No Akta</label>
            <div class="">
                <input class="w-full" type="text" name="no_akta" placeholder="No Akta Kelahiran">
                    @error('no_akta')
                        <p class="text-sm text-red-500">{{$message}}</p>
                    @enderror
            </div>
        </div>

        {{-- <div class="text-xl font-bold rounded-lg">
            <label>Sebagai</label>
            <div class="">
                <select class="w-full" type="text" name="ibu_atau_ayah" placeholder="Orangtua sebagai">
                    <option value="1">Ibu</option>
                    <option value="0">Ayah</option>
                </select>
                @error('ibu_atau_ayah')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
                <h1 class="text-gray-300 text-sm">Masukkan 1 untuk "Ibu" dan 0 untuk "Ayah"</h1>
        </div> --}}
        <div class="text-xl font-bold rounded-lg">
            <label>Jenis Kelamin</label>
            <div class="">
                <select class="w-full" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin">
                    <option value="Pria">laki-laki</option>
                    <option value="Wanita">perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="text-xl font-bold rounded-lg">
            <label>Tanggal Lahir Balita</label>
            <div class="">
                <input class="w-full" type="date" name="tgl_lahir_balita" placeholder="Tanggal lahir Balita">
                @error('tgl_lahir_balita')
                    <p class="text-sm text-red-500">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="">
            <button type="submit" class="bg-blue-200 rounded-lg px-8 shadow-xl hover:bg-indigo-100 font-bold text-xl p-4 mt-4 mb-6 text-blue-500 animate-pulse">Simpan</button>
        </div>
    </div>
    </form>
   
</x-app-layout>
