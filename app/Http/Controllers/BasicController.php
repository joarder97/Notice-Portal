<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index() {
        $title = 'param test 1';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function cs() {
        $title = 'param test 2';
        return view('pages.cs')->with('title', $title);
    }
    public function eee() {
        $title = 'param test 3';
        return view('pages.eee')->with('title', $title);
    }
    public function notice() {
        $title = 'param test 4';
        return view('pages.notice')->with('title', $title);
    }
    public function research() {
        $arr = [
            'title' => 'Research',
            'type' => ['Journal', 'Conference', 'Book Chapter']
        ];
        return view('pages.research')->with($arr);
    }


}
