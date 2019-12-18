<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    // define table name
    protected $table = 'tb_divisi';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'id_divisi';
    // define fillable fields
    protected $fillable = ['id_divisi', 'id_perusahaan', 'nama_divisi', 'email_divisi', 'status'];

    public function Organization()
    {
        return $this->belongsTo('App\Organization', 'id_perusahaan');
    }

    public function Units()
    {
        return $this->hasMany('App\Unit', 'id_divisi');
    }
}
