@extends('admin.master')
@section('mainContent')
    

            
    <div class="col-sm-12">
        <div class="well">
           <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            {!!Form::open(['url'=>'Product/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form control"  name="ProductName"  >
                    <span>{{$errors->has('ProductName')?$errors->first('ProductName'):''}}</span>
                </div>  
            </div> 
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Category Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="CategoryName">
                    <option>Select Category Name</option>
                    @foreach($catagories as $catagorie)
                       
                       <option value="1">{{$catagorie->CategoryName}}</option>
                     @endforeach 
                   </select>
                    <span>{{$errors->has('CategoryName')?$errors->first('CategoryName'):''}}</span>
                </div>  
            </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Manufacutre Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form control"  name="ManufacutreName"  >
                    <span>{{$errors->has('ManufacutreName')?$errors->first('ManufacutreName'):''}}</span>
                </div>  
            </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form control"  name="ProductPrice"  >
                    <span>{{$errors->has('Product Price')?$errors->first('Product Price'):''}}</span>
                </div>  
            </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="text" class="form control"  name="ProductQuantity"  >
                    <span>{{$errors->has('Product Quantity')?$errors->first('ProductQuantity'):''}}</span>
                </div>  
            </div>
       
           <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Short Description</label>
                <div class="col-sm-10">
                   <textarea class="form-control"  name="ProductShortDescription" rows="8"  ></textarea>
                </div>  
            </div> 
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Long Description</label>
                <div class="col-sm-10">
                   <textarea class="form-control"  name="ProductLongDescription" rows="8"  ></textarea>
                </div>  
            </div>
                     <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Product Image</label>
                <div class="col-sm-10">
                    <input type="file"   name="ProductImage" accept="image/*" >
                    <span>{{$errors->has('Product Image')?$errors->first('Product Image'):''}}</span>
                </div>  
            </div>
                <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                   <select class="form-control" name="publicationStatus">
                       <option>Select Publication Status</option>
                       <option value="1">Publish</option>
                       <option value="0">Unpublish</option>
                   </select>
                </div>  
            </div>
               <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="Submit" name="btn" class="btn-success btn-block">Save Product Info</button>
                </div>  
            </div>
            
            {!!Form::close()!!}    
    </div>
 </div>


@endsection