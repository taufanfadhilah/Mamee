<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    // define table name
    protected $table = 'tb_perusahaan';
    // choose timestamps
    public $timestamps = false;
    // define primary key
    protected $primaryKey = 'id_perusahaan';
    // define fillable fields
    protected $fillable = ['id_perusahaan', 'nama_perusahaan', 'status', 'account_name'];

    public function Divisions()
    {
        return $this->hasMany('App\Division', 'id_perusahaan');
    }
}
