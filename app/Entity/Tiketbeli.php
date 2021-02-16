<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Tiketbeli extends Model
{
    protected $table = "tiketbeli";
    protected $primaryKey = 'id_tiketbeli';
    protected $fillable = ["user_id", "tiket_id_tiket", "transaksi_id_transaksi", "jumlah_beli", "harga"];


    public function pembeli()
    {
        return $this->hasMany('App\Entity\Pembeli');
    }
    public function transaksi()
    {
        return $this->belongsTo('App\Entity\Transaksi');
    }
    public function tiket()
    {
        return $this->belongsTo('App\Entity\Tiket');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
