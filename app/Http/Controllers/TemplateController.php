<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{

      public function index()
    {
        $todos=[
            [
                "title" => "Laravel",
                "body"  =>"This is laravel body1"
            ],

            [
                "title" => "Laravel",
                "body"  =>"This is laravel body1"
            ],

            [
                "title" => "Laravel",
                "body"  =>"This is laravel body1"
            ]
            ];
        return view('mytemplate.home', compact('todos'));
    }

    public function about()
    {
        return view('mytemplate.about');
    }

     public function post()
    {
        return view('mytemplate.post');
    }

     public function contact()
    {
        return view('mytemplate.contact');
    }
}
