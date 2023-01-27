<?php

namespace App\Http\Livewire;

use App\Models\Employees;
use App\Models\Jabatan;
use Livewire\Component;

class EditEmployee extends Component
{

    // Data yang di simpan
    public $nama;
    public $usia;
    public $tanggal_lahir;
    public $alamat;
    public $gaji;
    public $m_kerja;
    public $s_kerja;
    public $jabatan_id;
    public $employee_id;

    public function mount($employee_id)
    {
        $employee = Employees::find($employee_id);
        $this->nama = $employee->nama;
        $this->usia = $employee->usia;
        $this->tanggal_lahir = $employee->tanggal_lahir;
        $this->alamat = $employee->alamat;
        $this->gaji = $employee->gaji;
        $this->m_kerja = $employee->m_kerja;
        $this->s_kerja = $employee->s_kerja;
        $this->jabatan_id = $employee->jabatan_id;
        $this->employee_id = $employee->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nama' => 'required',
            'usia' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'gaji' => 'required|numeric',
            'm_kerja' => 'required',
            's_kerja' => 'required',
            'jabatan_id' => 'required'
        ],[
            'nama.required' => 'Data nama wajib di isi',
            'usia.required' => 'Data usia wajib di isi',
            'tanggal_lahir.required' => 'Data tanggal lahir wajib di isi',
            'alamat.required' => 'Data alamat wajib di isi',
            'gaji.required' => 'Data gaji wajib di isi',
            'm_kerja.required' => 'Data mulai kontrak kerja wajib di isi',
            's_kerja.required' => 'Data selesai kontrak kerja wajib di isi',
            'jabatan_id.required' => 'Data jabatan wajib di isi',
            'gaji.numeric' => 'Data gaji hanya boleh di isi oleh angka saja'
        ]);
    }

    public function ubahEmployee()
    {
        // proses validasi data untuk mengubah data
        $this->validate([
            'nama' => 'required',
            'usia' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'gaji' => 'required|numeric',
            'm_kerja' => 'required',
            's_kerja' => 'required',
            'jabatan_id' => 'required'
        ],[
            'nama.required' => 'Data nama wajib di isi',
            'usia.required' => 'Data usia wajib di isi',
            'tanggal_lahir.required' => 'Data tanggal lahir wajib di isi',
            'alamat.required' => 'Data alamat wajib di isi',
            'gaji.required' => 'Data gaji wajib di isi',
            'm_kerja.required' => 'Data mulai kontrak kerja wajib di isi',
            's_kerja.required' => 'Data selesai kontrak kerja wajib di isi',
            'jabatan_id.required' => 'Data jabatan wajib di isi',
            'gaji.numeric' => 'Data gaji hanya boleh di isi oleh angka saja'
        ]);

        $employee = Employees::find($this->employee_id);
        $employee->nama = $this->nama;
        $employee->usia = $this->usia;
        $employee->tanggal_lahir = $this->tanggal_lahir;
        $employee->alamat = $this->alamat;
        $employee->gaji = $this->gaji;
        $employee->m_kerja = $this->m_kerja;
        $employee->s_kerja = $this->s_kerja;
        $employee->jabatan_id = $this->jabatan_id;
        $employee->save();

        return redirect('/all-employee')->with('toast_success','Data employee karyawan berhasil diubah!');
    }

    public function render()
    {
        $jabatans = Jabatan::all();
        return view('livewire.edit-employee',['jabatans'=>$jabatans])->layout('layouts.app');
    }
}
