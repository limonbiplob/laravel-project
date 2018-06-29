<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\creatProduct;
use App\allCatagory;
use App\Shironam;
use App\ImageSave;

class welcomeController extends Controller
{
    public function limon(){
        $logo=ImageSave::where('ManufacutreName','logo')->where('publicationStatus',1)->first();
        $contentbody=creatProduct::where('publicationStatus',0)->take(11)->orderBy('created_at','dest')->get();
        $products=ImageSave::where('publicationStatus',0)->get();
        return view ('growing.Home.home',['bodycontent'=>$contentbody,'logo'=>$logo]);
    }
    
    public function catagory(){
        return view ('growing.category.ajker-khobor');
    }
}
