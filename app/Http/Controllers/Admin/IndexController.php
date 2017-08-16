<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $controller;
    public function __construct(Request $controlle){
        
    }
    //后台主页
    function index(){
       return view('admin.index');
    }

}
