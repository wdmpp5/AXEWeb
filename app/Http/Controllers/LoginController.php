<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//begin class Login Controller
class LoginController extends Controller
{
	//begin constructor method
    public function __construct() 
    {

    } //end constructor method

    //begin method index
    public function index()
    {
    	return view( 'login' );
    } //end method index
} //end class Login Controller
