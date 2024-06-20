<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = [
            'hobbies' => ['Photography', 'Volleyball', 'Running']
        ];
        return view('hobbies', $data);
    }
}
