<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PICExt extends Model
{
    // define table name
    protected $table = 'tb_picext';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    // protected $primaryKey = 'id_meeting';
    // define fillable fields
    protected $fillable = ['id_meeting', 'nama', 'email', 'instansi', 'jabatan', 'absen'];
}
