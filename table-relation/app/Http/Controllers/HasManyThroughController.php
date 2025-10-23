<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class HasManyThroughController extends Controller
{
    public function index()
    {
        $countries = Country::with('articles')->get();        
        return view('has-many-through.index', compact('countries'));        
    }
}
