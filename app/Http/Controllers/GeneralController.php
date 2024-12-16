<?php

namespace App\Http\Controllers;

use App\Models\User;

class GeneralController extends Controller
{
    public function index()
    {
        //todo get user, find settings by user
        $user = User::with(['settings', 'experience', 'project'])->first();
        return view('welcome', ["user" => $user]);
    }

    public function about()
    {
        $user = User::with(['settings', 'experience', 'project', 'education', 'tech_stack'])->first();
        return view('about', ['user'=> $user]);
    }

    public function projects()
    {
        $user = User::with(['settings', 'experience', 'project', 'education', 'tech_stack'])->first();
        return view('projects', ['user' => $user]);
    }

    public function contact()
    {
        $user = User::with(['settings', 'experience', 'project', 'education', 'tech_stack'])->first();
        return view('contact', ['user' => $user]);
    }
}
