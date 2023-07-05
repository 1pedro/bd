<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FonteController extends Controller
{
    public function index()
    {
        return view('fonte.new', []);
    }


    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);
    }
}
