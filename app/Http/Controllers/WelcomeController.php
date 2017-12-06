<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $access_token = auth()->check() ? auth()->user()->access_token : anonymous()->access_token;

        return view('welcome', compact('access_token'));
    }
}
