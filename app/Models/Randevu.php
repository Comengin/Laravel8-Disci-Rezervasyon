<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    public function tedavi(){
        return $this->belongsTo(Tedavi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function procces(){
        return $this->belongsTo(Procces::class);
    }
}
