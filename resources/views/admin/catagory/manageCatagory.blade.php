@extends('admin.master')
@section('mainContent')
            
<hr/>
<table class="table table-bordered table-hover" style="color:white">
    <thead>
       <tr>
            <th>id</th>
        <th>CatagoryName</th>
        <th>CatagoryDescription</th>
        <th>Action</th>
       </tr>
        
    </thead>
    <tbody>
        @foreach($catagories as $catagories)
        <tr>
            <th >{{($catagories->id)}}</th>
            <td>{{($catagories->CatagoryName)}}</td>
            <td>{{($catagories->CatagoryDescription)}}</td>
            <td><a href="{{url('/catagory/edit/'.$catagories->id)}}" class="btn btn-success"> <span class="glyphicon glyphicon-edit"></span></a>
            <a href="" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
         </tbody>
         @endforeach
   
</table>

@endsection