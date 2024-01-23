<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treno;

class TrenoController extends Controller
{
    public function index()
    {
        $treni = Treno::all();
        return view('home', ['treni' => $treni]);
    }
}
