<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Handphone extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function invoice() {
        return $this->hasMany(Course::class, 'id');
    }

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('merk_hp', 'like', '%'. $search . '%')
            ->orWhere('tipe_hp', 'like', '%' . $search . '%');
        });

        $query->when($filters['merk_hp'] ?? false, function($query, $merk_hp){
            return $query->whereHas('merk_hp', function($query) use ($merk_hp){
                $query->where('merk_hp', $merk_hp);
            });
        });

        $query->when($filters['tipe_hp']??false, function($query, $tipe_hp){
            return $query->whereHas('tipe_hp',function($query) use ($tipe_hp){
                $query->where('tipe_hp', $tipe_hp);
            });
        });
    }
}
