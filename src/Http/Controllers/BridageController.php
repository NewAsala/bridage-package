<?php

namespace Pro\Bridage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pro\Bridage\Models\bridage;

class BridageController extends Controller
{
    public function index ()
    {
        return view('bridage::bridage');
    }

    public function send (Request $request)
    {
        bridage::create($request->all());
    }

}
