<div class="container mx-auto">
    <div class="flex space-x-2 justify-end pt-4 pb-3 pl-10 mr-10">
        <a href="{{ route('all-employee.add') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</a>
    </div>
    <h1 class="text-3xl text-blue-600/100 text-center pt-5 font-bold">
        Website Employee Sederhana (Karyawan)
    </h1>
    <div class="flex justify-center pt-5">
        <table class="border-separate border border-blue-600">
            <thead>
              <tr>
                <th class="border border-blue-600 p-5">Id</th>
                <th class="border border-blue-600 p-5">Nama</th>
                <th class="border border-blue-600 p-5">Usia</th>
                <th class="border border-blue-600 p-5">Tanggal Lahir</th>
                <th class="border border-blue-600 p-5">Jabatan</th>
                <th class="border border-blue-600 p-5">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
              <tr>
                <td class="border border-blue-600 text-center p-2">{{ $employee->id }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $employee->nama }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $employee->usia }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $employee->tanggal_lahir }}</td>
                <td class="border border-blue-600 text-center p-2">{{ $employee->jabatan->jabatan }}</td>
                <td class="border border-blue-600 text-center p-2">
                  <a href="{{ route('all-employee.edit',['employee_id'=>$employee->id]) }}" class="inline-block px-6 py-2.5 bg-yellow-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-700 hover:shadow-lg focus:bg-yellow-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">Ubah</a>
                  <a href="{{route('all-employee.detail',['employee_id'=>$employee->id])}}" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-lg transition duration-150 ease-in-out">Detail</a>
                  <a href="#" onclick="confirm('Apakah anda yakin ingin menghapus data employee karyawan ini ?') || event.stopImmediatePropagation()" wire:click.prevent="hapusEmployee({{ $employee->id }})" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" style="margin-left: 10px;">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </div>