<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $lowongan = Lowongan::all();
        return view('welcome', compact('lowongan'));
    }
}
