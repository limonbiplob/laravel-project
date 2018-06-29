<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dbmanufacture;


class ManufactureController extends Controller
{
      public function index()
    {
        return view('admin.Manufacture/addmanufacture');
    }
    
            public function storeManufacture(Request $request)
    {
      //return $request->all();
                      $Manufact=new dbmanufacture();
         $Manufact->ManufactureName=$request->ManufactureName;
        $Manufact->ManufactureDescription=$request->ManufactureDescription;
 $Manufact->PublicationStatus=$request->publicationStatus;
          $Manufact->save();
         return redirect('/Manufacture/add')->with('message','Category Save Successfully');

             //$Manufact=new dbmanufacture();
             // $Manufact->ManufactureName=$request->ManufactureName;
            // $Manufact->ManufactureDescription=$request->ManufactureDescription;
             //$Manufact->PublicationStatus=$request->publicationStatus;
             // $Manufact->save();
              // return redirect('/Manufacturer/add')->with('message','Manufacturer Save Successfully');
                   } 
    
        public function manageCatagory()
      
    {
        $catagories=dbmanufacture::all();
        return view ('admin.Manufacture/managemanufacture',['catagories'=>$catagories]);
    }
  
    
}