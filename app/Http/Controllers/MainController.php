<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function newNote()
    {
        return 'newNote';
    }
}
