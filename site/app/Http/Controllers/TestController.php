<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index() {
    	echo "<br>Test Controller";
    }
}
