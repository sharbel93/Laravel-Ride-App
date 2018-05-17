<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostRide;
class PagesController extends Controller
{
    public function index(){
        $posts = PostRide::all();
        return view('pages.index')->with('posts', $posts);

    }

    public function getride() {
        return view('pages.getride');
    }

    public function giveride() {
        return view('pages.giveride');
    }
}
