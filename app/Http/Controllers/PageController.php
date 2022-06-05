<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function show($slug)
    // {
    //     return view("pages.$slug",['slug' => $slug]);
    // }
    

    public function show()
    {
        return view('pages.clients');
    }
}
