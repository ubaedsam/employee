<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = "jabatan"; // menghubungkan ke dalam tabel jabatan

    public function employees()
    {
        $this->hasOne(Employees::class);
    }
}
