<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageSave;


class ImageController extends Controller
{
  public function index(){
      
      return view('admin.Image.imageCatagory');
  }
    
        public function storeImage(Request $request){
             
         $ProductImage=$request->file('ProductImage');
         $name=$ProductImage->getClientOriginalName();
         $uplodePath='public/ProductImage/';
         $ProductImage->move($uplodePath,$name);
        $imageUrl=$uplodePath.$name;
        $this->saveProductInfo($request,$imageUrl);
        return view ('admin.Image.imageCatagory')->with('message','Image Save Successfully');
        }

         

     
     
    protected function saveProductInfo ($request,$imageUrl){
        
                 $product=new ImageSave();
         $product->CategoryName=$request->CategoryName;
         $product->ManufacutreName=$request->ManufacutreName;
         $product->ProductImage=$imageUrl;
         $product->publicationStatus=$request->publicationStatus;
         $product->save();
    }
}
