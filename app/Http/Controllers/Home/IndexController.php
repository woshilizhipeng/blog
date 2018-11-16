<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
    	return view('home.index');
    }

    function article(){
    	return view('home.about');
    }

    function list(){
    	return view('home.list');
    }

    function share(){
    	return view('home.share');
    }

    function info(){
    	return view('home.info');
    }

    function time(){
    	return view('home.time');
    }

    function infopic(){
    	return view('home.infopic');
    }
}
