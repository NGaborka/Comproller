<?php

namespace App\Http\Controllers;

use App\Models\Dolgozo;
use Illuminate\Http\Request;

class DolgozoController extends Controller
{
    public function index()
    {
        $dolgozok = Dolgozo::all();
        return view('dolgozok', compact('dolgozok'));
    }
}