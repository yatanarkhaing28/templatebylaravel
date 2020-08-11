<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homefun($value='')
    {
    	return view('home');
    }



    public function aboutfun($value='')
   	{
    	return view('about');
    }

    public function simplepostfun($value='')
    {
        return view('simplepost');
    }


    public function contactfun($value='')
    {
    	return view('contact');
    }
}
