@extends('admin.master')
@section('mainContent')
    

            
    <div class="col-sm-12">
        <div class="well">
           <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            {!!Form::open(['url'=>'/Shironam/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data'])!!}
                        <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-lanel">Shironam Description</label>
                <div class="col-sm-10">
                   <textarea class="form-control"  name="shironamDescription" rows="8"  ></textarea>
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
                  <button type="Submit" name="btn" class="btn-success btn-block">Save shironam</button>
                </div>  
            </div>
            
            {!!Form::close()!!}    
    </div>
 </div>


@endsection