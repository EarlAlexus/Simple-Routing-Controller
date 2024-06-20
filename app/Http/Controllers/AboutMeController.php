<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Earl Alexus F. Serafica',
            'bio' => 'I am a web developer based in Baguio City.'
        ];
        return view('about-me', $data);
    }
}
