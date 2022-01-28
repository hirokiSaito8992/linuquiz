<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function create()
    {
        return view('contents.create');
    }
}
