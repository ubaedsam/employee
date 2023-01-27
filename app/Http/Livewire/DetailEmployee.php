<?php

namespace App\Http\Livewire;

use App\Models\Employees;
use Livewire\Component;

class DetailEmployee extends Component
{
    public $employee_id;

    public function mount($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    public function render()
    {
        $employee = Employees::where('id',$this->employee_id)->first();

        return view('livewire.detail-employee',['employee'=>$employee])->layout('layouts.app');
    }
}
