<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $timestamps = false;

    protected $fillable = [
        'customerId',
        'products',
        'shippingAddress'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }
}
