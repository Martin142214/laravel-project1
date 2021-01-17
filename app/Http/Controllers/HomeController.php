<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $phones = Phone::all();
        return view('show', compact('phones'));
    }
}
