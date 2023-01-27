<div>
    <section class="pt-5 pb-32">
        <div class="container">
          <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
            <a href="{{ url('/all-employee') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Kembali</a>
          </div>
          <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-5">
                <h1 class="text-3xl text-blue-600/100 text-center font-bold">
                    Detail Data Employee (Karyawan)
                </h1>
            </div>
          </div>
          <div class="flex justify-center">
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
              <h6 class="text-blue-600/100 text-xl leading-tight font-medium text-center">{{ $employee->nama }}</h6>
              <h4 class="text-blue-600/100 text-xl leading-tight font-medium mb-4 text-center">{{ $employee->jabatan->jabatan }}</h4>
              <p class="text-gray-700 text-base mb-4">
                Usia : {{ $employee->usia }}
              </p>
              <p class="text-gray-700 text-base mb-4">
                Tanggal Lahir : {{ $employee->tanggal_lahir }}
              </p>
              <p class="text-gray-700 text-base mb-4">
                Gaji : {{ $employee->gaji }}
              </p>
              <p class="text-gray-700 text-base mb-4">
                Mulai Kontrak Kerja : {{ $employee->m_kerja }}
              </p>
              <p class="text-gray-700 text-base mb-4">
                Selesai Kontrak Kerja : {{ $employee->s_kerja }}
              </p>
              <p class="text-gray-700 text-base mb-4">
                Alamat : {{ $employee->alamat }}
              </p>
            </div>
          </div>
        </div>
      </section>
</div>
