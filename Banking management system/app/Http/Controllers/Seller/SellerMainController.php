<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerMainController extends Controller
{
    public function index(){
        return view('seller.dashboard');
    }

     public function add_user(){
        return view('seller.usermanagement.add_user');
    }

     public function view_all_user(){
        return view('seller.usermanagement.view_all_user');
    }
    public function user_account_status(){
        return view('seller.usermanagement.user_account_status');
    }
}
