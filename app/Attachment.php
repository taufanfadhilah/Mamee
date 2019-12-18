<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    // define table name
    protected $table = 'tb_lampiran';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    // protected $primaryKey = 'id_meeting';
    // define fillable fields
    protected $fillable = ['id_meeting', 'nama_lampiran', 'upload_date', 'data'];
}
