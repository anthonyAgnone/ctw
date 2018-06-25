<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Album;
use App\Photo;
use App\Services;


class PageController extends Controller
{
    public function index() {
        $fields = Admin::find('1');
        $fieldTwo = Admin::find('2');
        $fieldThree = Admin::find('3');
        return view('pages.index')->with('fields', $fields)->with('fieldTwo', $fieldTwo)->with('fieldThree', $fieldThree);
    }

    public function history() {
        return view('pages.history');
    }

    public function services() {
        $services = Services::all();
        return view('pages.services')->with('services', $services);
    }

    public function projects() {
        $albums = Album::all();
        $photos = Photo::all();
        return view('pages.projects')->with('albums', $albums)->with('photos', $photos);

    }

    public function soon(){
        return view('pages.coming-soon');
    }
}
