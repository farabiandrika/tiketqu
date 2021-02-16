<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "table_transaksi";
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ["id_transaksi", "event_id_event", "user_id", "metode_pembayaran", "nover","jumlah_tiket", "total", "status"];
    protected $with = ['pembeli','user','event', 'tiketbeli'];

    public function pembeli()
    {
        return $this->hasMany('App\Entity\Pembeli');
    }
    public function tiketbeli()
    {
        return $this->hasMany('App\Entity\Tiketbeli');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function event()
    {
        return $this->belongsTo('App\Entity\Event');
    }


}
