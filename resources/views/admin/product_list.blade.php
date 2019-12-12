@extends('admin.admin_base')
@section('content')
<div class="row">   
   @foreach ($data as $dt)
<div class="col-sm-6 mt-2">
  <div class="card" style="width: 30rem;">
    
        <img src="data:image/png;base64,{{ chunk_split(base64_encode($dt->image)) }}" height="300">
      
      <div class="card-body">
          <h5 class="card-title">{{$dt->product}}</h5>
          <p class="card-text">{{$dt->desc}}</p>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Created At: {{$dt->created_at}}</li>
              <li class="list-group-item">Updated At: {{$dt->updated_at}}</li>
              {{-- <li class="list-group-item"><a href="{{route('image.edit', [$img1['id']])}}" class="btn btn-success btn-block">Edit</a></li> --}}
          </ul>
      </div>
  </div>
</div>
@endforeach
</div>
@endsection