@extends('admin.admin_base')

@section('content')
<form method="POST" class="container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.7;background:white">
    @csrf
        <div class="form-group" style="color:black">
            <label>Name</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" name="name" aria-describedby="e" placeholder="" value="{{$data->name}}">
        </div>
        <div class="form-group" style="color:black">
            <label>Contact No.</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" name="contact" aria-describedby="e" placeholder="" value="{{$data->contact}}">
        </div>
        <div class="form-group" style="color:black">
            <label>Password</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" name="password" aria-describedby="e" placeholder="" value="{{$data->password}}">
        </div>
        <div class="form-group">
                <table align="center">
                    <tr>
                        <td>
                            <button type="submit" class="btn btn btn-success btn-lg">Save</button>
                            <a href="/admin/home" class="btn btn-primary btn-lg">Cancel</a>
                        </td>
                    </tr>
                </table>
            </div>       
    </form>  
@endsection