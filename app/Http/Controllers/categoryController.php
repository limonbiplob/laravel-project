<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\allCatagory;



class categoryController extends Controller
{
   public function index()
    {
      
        return view('admin.catagory.creatCatagory');
    }
        public function storeCatagory(Request $request)
    {
       //return $request->all();
              $catagory=new allCatagory();
        $catagory->CatagoryName=$request->CatagoryName;
        $catagory->CatagoyDescription=$request->CatagoyDescription;
         $catagory->save();
        return redirect('/Catagory/add')->with('message','Category Save Successfully');
       
            
    }
    public function manageCatagory()
      
    {
        $catagories=allCatagory::all();
        return view ('admin.catagory.manageCatagory',['catagories'=>$catagories]);
    }
    public function editCatagory($id)
      
    {
       $catagories=allCatagory::where('id',$id)->first();
   return view ('admin.catagory.editCatagory',['catagories'=>$catagories])->with('message','Category update Successfully');
    }

}
