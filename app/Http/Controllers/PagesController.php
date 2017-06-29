<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data  = array(
            'title' => 'services',
            'services' => ['service-1','service-2','service-3'] 
            );
        return view('pages.services')->with($data);
    }
}
