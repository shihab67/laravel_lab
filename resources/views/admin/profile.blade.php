@extends('admin.admin_base')

@section('content')
<form method="POST" class="container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.7;background:white">
        <div class="form-group" style="color:black">
            <label>Name</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" aria-describedby="e" placeholder="" value="{{$data->name}}" readonly>
        </div>
        <div class="form-group" style="color:black">
            <label>User Name</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" aria-describedby="e" placeholder="" value="{{$data->username}}" readonly>
        </div>
        <div class="form-group" style="color:black">
            <label>Contact No.</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" aria-describedby="e" placeholder="" value="{{$data->contact}}" readonly>
        </div>
        <div class="form-group" style="color:black">
            <label>Password</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" aria-describedby="e" placeholder="" value="{{$data->password}}" readonly>
        </div>
       
    </form>  
@endsection