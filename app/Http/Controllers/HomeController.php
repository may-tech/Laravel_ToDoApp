<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //追加


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}