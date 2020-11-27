<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class topController extends Controller
{
    public function index() {
        return view('top');
    }
}
