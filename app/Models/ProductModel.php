<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'Quantity',
        'Category',
        'MainImage',
        'OtherImages'
    ];

    public function getProductByName($productName)
    {
        return self::where('Name', $productName)->first();
    }

    public function getProductByCategory($category)
    {
        return self::where('Category', 'LIKE', "%{$category}%")->get();
    }
}

