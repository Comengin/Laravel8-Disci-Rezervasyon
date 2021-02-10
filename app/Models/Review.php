<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];
    public function tedavis(){
        return $this->belongsTo(Tedavi::class);
    }
}
