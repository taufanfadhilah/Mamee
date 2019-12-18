<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // define table name
    protected $table = 'tb_karyawan';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'nik';
    // define fillable fields
    protected $fillable = ['nik', 'id_unit', 'nama', 'level_jabatan', 'email', 'phone', 'foto'];
}
