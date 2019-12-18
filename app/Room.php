<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // define table name
    protected $table = 'tb_ruangan';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'id_room';
    // define fillable fields
    protected $fillable = ['id_room', 'id_perusahaan', 'nama_ruangan', 'lokasi', 'img_map', 'img_foto', 'kapasitas', 'status'];
}
