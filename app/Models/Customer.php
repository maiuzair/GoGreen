<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Phone',
        'Address',
        'ccName',
        'ccNumber',
        'ccExpiration'
    ];
}

