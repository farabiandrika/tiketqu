<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Penyelenggara extends Model
{
    protected $table="penyelenggara";
    protected $primaryKey = 'id_penyelenggara';
    protected $fillable=["nama_penyelenggara","no_telp_penyelenggara","logo_penyelenggara","no_rek_penyelenggara","nama_bank_penyelenggara","user_id"];

    public function event()
    {
        return $this->hasMany('App\Entity\Event');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
