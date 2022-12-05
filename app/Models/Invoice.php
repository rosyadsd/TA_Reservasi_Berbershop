<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function handphone(){
        return $this->belongsTo(Handphone::class, 'id_hp');
    }
    public function karyawan(){
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }
    public function toko(){
        return $this->belongsTo(Toko::class, 'id_toko');
    }
}
