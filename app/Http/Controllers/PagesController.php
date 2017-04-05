<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class PagesController extends Controller
{
    public function Showcase()
    {
        return view('pages.showcase.index');
    }

    public function Skills()
    {
        return view('pages.skills');
    }

    public function Journey()
    {
        return view('pages.journey');
    }

    public function Resume()
    {
        return view('pages.resume');
    }
}
