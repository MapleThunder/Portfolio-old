<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function Portfolio()
    {
        return view('pages.portfolio');
    }

    public function Skills()
    {
        return view('pages.skills');
    }

    public function Journey()
    {
        return view('pages.journey');
    }
}
