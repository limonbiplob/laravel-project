<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\creatProduct;
use App\allCatagory;

class ProductController extends Controller
{
        public function index()
    {
        $catagories=allCatagory::all();
        return view('admin.Product.creatProduct',['catagories'=>$catagories]);
    }
    
     public function storeProduct(Request $request)
    {
    // return $request->all();
                      // $Manufact=new dbmanufacture();
         // $Manufact->ManufactureName=$request->ManufactureName;
        // $Manufact->ManufactureDescription=$request->ManufactureDescription;
 // $Manufact->PublicationStatus=$request->publicationStatus;
          // $Manufact->save();
         // return redirect('/Manufacture/add')->with('message','Category Save Successfully');

     
         $ProductImage=$request->file('ProductImage');
         $name=$ProductImage->getClientOriginalName();
         $uplodePath='public/ProductImage/';
         $ProductImage->move($uplodePath,$name);
        $imageUrl=$uplodePath.$name;
        $this->saveProductInfo($request,$imageUrl);
        return redirect('/Product/add')->with('message','Category Save Successfully');
         

     
     }
     
    protected function saveProductInfo ($request,$imageUrl){
        
                 $product=new creatProduct();
         $product->ProductName=$request->ProductName;
         $product->CategoryName=$request->CategoryName;
         $product->ManufacutreName=$request->ManufacutreName;
         $product->ProductPrice=$request->ProductPrice;
         $product->ProductQuantity=$request->ProductQuantity;
         $product->ProductShortDescription=$request->ProductShortDescription;
         $product->ProductLongDescription=$request->ProductLongDescription;
         $product->ProductImage=$imageUrl;
         $product->publicationStatus=$request->publicationStatus;
         $product->save();
    }





}
