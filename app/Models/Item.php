<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'slug',
        'shipment',
        'stock',
        'description',
        'user_id',
    ];


    public function categories(){
        return $this->belongsToMany(Category::class, 'items_categories', 'item_id', 'category_id');
    }
}
