<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PIC extends Model
{
    // define table name
    protected $table = 'tb_pic';
    // choose timestamps
    public $timestamps = false;
    // define fillable fields
    protected $fillable = ['id', 'id_meeting', 'nik', 'absen'];
}
