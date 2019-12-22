@extends('admin.admin_base')
@section('content')
<form method="POST" class="container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.7;background:white">
    @csrf
        <div class="form-group" style="color:black">
            <label>Description</label>
            <input style="color:black" type="text" class="form-control form-control-lg" id="name" name="name" aria-describedby="e" placeholder="" value="{{$data->desc}}">
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