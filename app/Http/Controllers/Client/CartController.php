<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function stroe(Request $request)
    {
        return response($request->all(),200);
    }
    //
}
