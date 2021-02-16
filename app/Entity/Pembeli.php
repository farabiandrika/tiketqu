<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table="pembeli";
    protected $primaryKey = 'id_pembeli';
    protected $fillable = ["nama_pembeli","email_pembeli", "transaksi_id_transaksi", "tiketbeli_id_tiketbeli", "tiket_id_tiket","qrcode"];

    public function transaksi()
    {
        return $this->belongsTo('App\Entity\Transaksi');
    }
    public function tiketbeli()
    {
        return $this->belongsTo('App\Entity\Tiketbeli');
    }
    public function tiket()
    {
        return $this->belongsTo('App\Entity\Tiket');
    }


}
