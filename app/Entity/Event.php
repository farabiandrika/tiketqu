<?php

namespace App\Entity;

use ALajusticia\Expirable\Traits\Expirable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Expirable;
    const EXPIRES_AT = 'ends_at';

    protected $table="event";
    protected $primaryKey = 'id_event';
    protected $fillable = ["nama_event","deskripsi_event","waktu_mulai_event","waktu_berakhir_event","lokasi_event","lokasi_latitude","lokasi_longitude","kategori_event","banner_event","jenis_promosi","penyelenggara_id_penyelenggara","user_id","status_event","ends_at"];
    protected $with = ['tikets','penyelenggara','user'];

    public function tikets()
    {
        return $this->hasMany('App\Entity\Tiket');
    }

    public function penyelenggara() {
        return $this->belongsTo('App\Entity\Penyelenggara');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
