<?php

namespace App\Http\Controllers;

use App\Achievments;
use App\Http\Controllers\Controller;
use App\language;
use App\Models\User;
use App\Portofolio;

class DashboardController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $portofolio = Portofolio::count('id');
        $achievments = Achievments::count('id_achiev');
        $language = language::all();

        return view('admin/beranda', compact('portofolio', 'achievments', 'language'));
    }
}
