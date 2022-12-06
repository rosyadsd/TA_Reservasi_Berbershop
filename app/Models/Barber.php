<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Barber extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function invoice() {
        return $this->hasMany(Course::class, 'id');
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_barber', 'like', '%'. $search . '%')
            ->orWhere('nohp_barber', 'like', '%' . $search . '%');
        });

        $query->when($filters['nama_barber'] ?? false, function($query, $nama_barber){
            return $query->whereHas('nama_barber', function($query) use ($nama_barber){
                $query->where('nama_barber', $nama_barber);
            });
        });

        $query->when($filters['nohp_barber']??false, function($query, $nohp_barber){
            return $query->whereHas('nohp_barbert',function($query) use ($nohp_barber){
                $query->where('nohp_barber', $nohp_barber);
            });
        });
    }
}
