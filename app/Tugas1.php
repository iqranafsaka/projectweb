<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas1 extends Model
{
    protected $fillable = ['nama', 'umur', 'kelas', 'jurusan', 'wali_kelas'];
}
