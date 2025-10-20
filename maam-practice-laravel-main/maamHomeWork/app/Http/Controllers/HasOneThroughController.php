<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class HasOneThroughController extends Controller
{
    public function index()
    {
        $product=Mechanic::with('carOwner')->get();
        return view('hasOneThrough.index',compact('product'));
    }
}
