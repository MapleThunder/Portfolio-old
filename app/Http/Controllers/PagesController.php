<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class PagesController extends Controller
{

    public function DataMig()
    {
        return view('pages.showcase.datamigration');
    }

    public function Erd()
    {
        return view('pages.showcase.erd');
    }

    public function FoodFight()
    {
        return view('pages.showcase.foodfight');
    }

    public function Journey()
    {
        return view('pages.journey');
    }

    public function NsccApp()
    {
        return view('pages.showcase.nsccapp');
    }

    public function Resume()
    {
        return view('pages.resume');
    }

    public function Showcase()
    {
        return view('pages.showcase.index');
    }

    public function Skills()
    {
        return view('pages.skills');
    }

    public function StackTheBoxes()
    {
        return view('pages.showcase.stacktheboxes');
    }

    public function TunnelBird()
    {
        return view('pages.showcase.tunnelbird');
    }

}
