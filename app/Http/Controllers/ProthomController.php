<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shironam;

class ProthomController extends Controller
{
     public function index(){
     
      return view('growing.category.ProthomPage');
  }
}
