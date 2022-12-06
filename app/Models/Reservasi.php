<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function paket(){
        return $this->belongsTo(Paket::class, 'id_paket');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin');
    }
    public function barber(){
        return $this->belongsTo(Barber::class, 'id_barber');
    }
    public function toko(){
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}
