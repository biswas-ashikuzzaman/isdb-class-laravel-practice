<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Profile;

class User extends Model
{
    // কোন fields mass assignable
    protected $fillable = ['name', 'country_id'];

    /**
     * User কোন Country এর সাথে সম্পর্কিত
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * User এর একটি Profile আছে
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
