<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
<<<<<<< HEAD
=======

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
>>>>>>> 389a4f4e61b25c0a45eefdb8bcab81fa03f24e6e
}
