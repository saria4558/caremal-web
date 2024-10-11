<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BacaController extends Controller
{
    public function index()
    {
        return view('BacaSelengkapnya');
    }
}
