<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FonteController extends Controller
{
    public function index()
    {
        $estudos = DB::select('select * from Estudo');

        return view('fonte.new', ['estudos' => $estudos]);
    }


    public function store(Request $request)
    {
        $data = $request->all();

        DB::insert('insert into Fonte');
    }
}
