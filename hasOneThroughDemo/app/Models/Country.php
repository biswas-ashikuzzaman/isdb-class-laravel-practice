<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Profile;

class Country extends Model
{
    protected $fillable = ['name'];

    public function profile()
    {
        return $this->hasOneThrough(
            Profile::class,
            User::class,
            'country_id',
            'user_id',
            'id',
            'id'
        );
    }
}
