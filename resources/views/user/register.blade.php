@extends('base')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form class="form-horizontal" method="POST">
                    @csrf
                    <legend>Register</legend>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        
                    @endif
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" aria-describedby="" placeholder="Name">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputName1">User Name</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" aria-describedby="" placeholder="User Name">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputName1">Contact No.</label>
                                <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')}}" aria-describedby="" placeholder="Contact No.">
                            </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="Cpass" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="/login" class="btn btn-warning btn-block">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection