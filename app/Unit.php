<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    // define table name
    protected $table = 'tb_unit';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'id_unit';
    // define fillable fields
    protected $fillable = ['id_unit', 'id_divisi', 'nama_unit', 'email_unit', 'status'];

    public function Division()
    {
        return $this->belongsTo('App\Division', 'id_divisi');
    }
}
