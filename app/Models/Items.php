<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use HasFactory;
    Use SoftDeletes;


    protected $fillable = [
        'category',
        'brand',
        'quantity',
        'item_img',
        'name',
        'description',
        'price',

    ];

     protected $dates = [

        'deleted_at'
    ];

    public function wishlist(){
        return $this->hasMany(Wishlist::class, 'itemID');
    }

}
