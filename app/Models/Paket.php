<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function invoice() {
        return $this->hasMany(Course::class, 'id');
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_paket', 'like', '%'. $search . '%')
            ->orWhere('keterangan_paket', 'like', '%' . $search . '%');
        });

        $query->when($filters['nama_paket'] ?? false, function($query, $nama_paket){
            return $query->whereHas('nama_paket', function($query) use ($nama_paket){
                $query->where('nama_paket', $nama_paket);
            });
        });

        $query->when($filters['keterangan_paket']??false, function($query, $keterangan_paket){
            return $query->whereHas('keterangan_paket',function($query) use ($keterangan_paket){
                $query->where('keterangan_paket', $keterangan_paket);
            });
        });
    }
}
