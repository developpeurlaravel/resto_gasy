<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index () {

        $title="Welcome to laravel for beginners from ChallengeProgramming!";
        return view('pages.index')->with('title', $title);

    }

    public function about () {

        $title='About-us';
        return view('pages.about')->with('title', $title);

    }

    public function services () {

            $data = array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming', 'SEO', 'Site web', 'Application web']
            );
        return view('pages.services')->with($data);

    }
}
