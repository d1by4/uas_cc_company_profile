<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    public function index(Request $request)
    {
        return view('kontak');
    }
}
