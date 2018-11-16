<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin;
require "./code/Code.class.php";

class LoginController extends Controller
{
    function login(){
    	$input = Input::all();
    	if($input){
            $code = new \Code;
    	    $_code = $code ->get();
    	    if($_code == strtoupper($input['code'])){
                if($input['username']!=){

                }
    	    }else{
    	    	return back()->with('errors','验证码错误');
    	    }
    	}else{
    		return view('admin.login');
    	}
    	    	
    }

    function code(){
       $code = new \Code;
       $code ->make();
    }
}
