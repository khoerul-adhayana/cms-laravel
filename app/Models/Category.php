<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{

     protected $table = "categories";  
     protected $primarykey = "id";
     protected $fillable = ['id','slug'];

     public function products(){
         return $this->hasMany(Product::class);
     }

}
