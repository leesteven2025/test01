<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Product extends Model
{
    use HasFactory;
    public function getImageUrlAttribute()
    {
        $table = 'products';
        return Storage::disk('public')->url($this->attributes['image']);
    }

}
