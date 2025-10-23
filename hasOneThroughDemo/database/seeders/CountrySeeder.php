<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\User;
use App\Models\Profile;

class CountrySeeder extends Seeder
{
    public function run()
    {
        // Country তৈরি
        $country = Country::create(['name' => 'Bangladesh']);

        // Country এর জন্য User তৈরি
        $user = User::create([
            'name' => 'Ashik Biswas',
            'country_id' => $country->id
        ]);

        // User এর জন্য Profile তৈরি
        Profile::create([
            'user_id' => $user->id,
            'bio' => 'I am a Laravel developer.'
        ]);
    }
}
