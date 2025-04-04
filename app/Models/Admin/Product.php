<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'price', 'quantity'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
