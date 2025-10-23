<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    // সব Country দেখানোর জন্য
    public function index()
    {
        $countries = Country::with('profile')->get();
        return view('countries.index', compact('countries'));
    }
}
