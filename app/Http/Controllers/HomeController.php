<?php

namespace TierradeAventuras\Http\Controllers;

use Illuminate\Http\Request;
use TierradeAventuras\Http\Requests;
use TierradeAventuras\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
