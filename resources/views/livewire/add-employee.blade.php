<div>
    <section class="pt-5 pb-32">
        <div class="container">
          <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
            <a href="{{ url('/all-employee') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali</a>
          </div>
          <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-5">
                <h1 class="text-3xl text-blue-600/100 text-center font-bold">
                    Tambah Data Employee (Karyawan)
                </h1>
            </div>
          </div>
          <form method="post" wire:submit.prevent="AddEmployee">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full px-4 mb-4">
                <label for="nama" class="text-base font-bold text-blue-600/100">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full bg-slate-200 p-3 rounded-md" wire:model="nama" />
                @error('nama')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="usia" class="text-base font-bold text-blue-600/100">Usia</label>
                <input type="text" id="usia" name="usia" class="w-full bg-slate-200 p-3 rounded-md" wire:model="usia" />
                @error('usia')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="tanggal_lahir" class="text-base font-bold text-blue-600/100">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full bg-slate-200 p-3 rounded-md" wire:model="tanggal_lahir" />
                @error('tanggal_lahir')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="alamat" class="text-base font-bold text-blue-600/100">Alamat</label>
                <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-slate-200 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="alamat" rows="3" placeholder="Alamat Lengkap" wire:model="alamat"></textarea>
                @error('alamat')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="gaji" class="text-base font-bold text-blue-600/100">Gaji</label>
                <input type="number" id="gaji" name="gaji" class="w-full bg-slate-200 p-3 rounded-md" wire:model="gaji" />
                @error('gaji')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="m_kerja" class="text-base font-bold text-blue-600/100">Mulai Kontrak Kerja</label>
                <input type="date" id="m_kerja" name="m_kerja" class="w-full bg-slate-200 p-3 rounded-md" wire:model="m_kerja" />
                @error('m_kerja')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="s_kerja" class="text-base font-bold text-blue-600/100">Selesai Kontrak Kerja</label>
                <input type="date" id="s_kerja" name="s_kerja" class="w-full bg-slate-200 p-3 rounded-md" wire:model="s_kerja" />
                @error('s_kerja')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4 mb-4">
                <label for="jabatan" class="text-base font-bold text-blue-600/100">Jabatan</label>
                <select name="jabatan_id" class="w-full bg-slate-200 p-3 rounded-md" wire:model="jabatan_id">
                    <option selected>Pilih Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->jabatan }}</option>
                    @endforeach
                </select>
                @error('jabatan_id')
                    <p class="text-base font-bold text-red-600/100">{{ $message }}</p>
                @enderror
              </div>
              <div class="w-full px-4">
                <button type="submit" class="w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </section>
</div>
