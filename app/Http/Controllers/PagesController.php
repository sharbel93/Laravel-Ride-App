<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function getride() {
        return view('pages.getride');
    }

    public function giveride() {
        return view('pages.giveride');
    }
}
