<?php

namespace App\Http\Controllers;

use App\Achievments;
use App\language;
use App\Portofolio;
use App\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $achievment = Achievments::all();
        $profile = Profile::first();
        $portofolio = Portofolio::all();
        $language = language::all();
        return view('user.beranda', compact('achievment', 'portofolio', 'profile', 'language'));
    }
}
