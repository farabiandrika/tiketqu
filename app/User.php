<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'no_identitas', 'username', 'nama', 'tanggal_lahir', 'jenkel', 'alamat', 'no_hp', 'email', 'password', 'foto_user', 'profesi', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function event() {
        return $this->hasMany('App\Entity\Event');
    }

    public function penyelenggara() {
        return $this->hasMany('App\Entity\Penyelenggara');
    }
}