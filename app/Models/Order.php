<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    Use SoftDeletes;

     protected $fillable = [
        'user_id',
         'status',
        'grand_total',
        'payment_method',
        'phone_number',
        'location'
        'is_paid',
         'is_returned'
    ];

     protected $dates = [

        'deleted_at'
        'datePaid'
    ];

     public function items(){

        return $this->belongsToMany(Items::class, 'order_items','order_id','product_id')->withTimestamps();
        
     }   
}
