<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'parent'
    ];
    #One to Many
    public function products(){
        return $this->hasMany(Tedavi::class);
    }
    #One To Many Iverse
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    #One To Many
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
