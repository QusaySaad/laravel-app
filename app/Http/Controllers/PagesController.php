<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my website';
        //return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);
        //return view('pages.index', ['title' => $title]);
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about', ['title' => $title]);
        //return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        //return view('pages.services');
        //return view('pages.services', ['title' => $data]);
        return view('pages.services')->with($data);
    }
}

