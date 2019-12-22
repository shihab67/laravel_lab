@extends('admin.admin_base')
@section('content')  
<form method="POST" class="container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.7;background:white">
    @csrf
    <img src="{{ asset($data->image) }}" class="card-img-top" alt="..."  height="300" width="30rem">
      <div class="card-body">
          <h5 class="card-title">{{$data->product}}</h5>
          <p class="card-text">{{$data->desc}}</p>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Created At: {{$data->created_at}}</li>
              <li class="list-group-item">Updated At: {{$data->updated_at}}</li>
          </ul>
      </div>
      <div class="card-footer">
        <div class="form-group">
            <table align="center">
                <tr>
                    <td>
                        <button type="submit" class="btn btn btn-danger btn-lg">Delete</button>
                        <a href="/admin/home" class="btn btn-primary btn-lg">Cancel</a>
                    </td>
                </tr>
            </table>
        </div>    
      </div>
</form>
@endsection