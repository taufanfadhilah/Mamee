<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    // define table name
    protected $table = 'tb_meeting';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'id_meeting';
    // define fillable fields
    protected $fillable = ['id_meeting', 'nama_meeting', 'deskripsi', 'creator_nik', 'id_perusahaan', 'id_room', 'tanggal', 'timestart', 'timeend', 'status', 'time_created', 'time_modified', 'tipemeeting'];
}
