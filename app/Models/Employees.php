<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = "employee"; // menghubungkan ke dalam tabel employee

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
