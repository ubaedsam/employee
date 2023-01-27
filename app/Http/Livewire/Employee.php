<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employees;

class Employee extends Component
{

    public function hapusEmployee($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect('/all-employee')->with('toast_success','Data employee karyawan berhasil di hapus!');
    }

    public function render()
    {
        $employees = Employees::all();
        return view('livewire.employee',['employees'=>$employees])->layout('layouts.app');
    }
}
