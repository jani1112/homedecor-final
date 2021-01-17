<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\Customer;

class CustomerController extends Controller
{
    public function index(Request $req){

        $username = $req->fname;
        $msg = "Welcome".$username;
        return response()->json(array('msg' => $msg),200);
    }
}
