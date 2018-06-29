<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shironam;

class ShironamController extends Controller
{
  
   public function index()
    {
        return view('admin.Shironam.addShironam');
    }
             public function storeShironam(Request $request){
               $shironam=new Shironam();
        $shironam->shironamDescription=$request->shironamDescription;
 $shironam->PublicationStatus=$request->publicationStatus;
          $shironam->save();
         return redirect('/shironam/add')->with('message','Category Save Successfully');
        }
}
