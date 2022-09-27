<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'price', 'active', 'category_id'];

//    public function getImageAttribute($value){
//        $this->attributes['image'] = Str::lower($value);
//    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
