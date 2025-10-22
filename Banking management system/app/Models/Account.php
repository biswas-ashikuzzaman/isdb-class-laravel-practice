<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
     protected $table = 'accounts';

    // The attributes that are mass assignable
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'account_type',
        'initial_amount',
    ];
}