<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'skills' => ['HTML', 'CSS', 'JavaScript', 'Java', 'Python']
        ];
        return view('skills', $data);
    }
}
