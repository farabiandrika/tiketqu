<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $table="tiket";
    protected $primaryKey = 'id_tiket';
    protected $fillable = ["nama_tiket","event_id_event","stok_tiket","harga_tiket","deskripsi_tiket", "waktu_berakhir_jual" ,"waktu_berakhir_jual","satuan_tiket"];

    public function event()
    {
        return $this->belongsTo('App\Entity\Event');
    }
}
