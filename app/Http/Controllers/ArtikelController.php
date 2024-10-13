<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPublic;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function artikel()
    {
        $data = ArtikelPublic::all();
        return view('ArtikelPublic', compact('data'));

        dd($data);
    
    }

}


