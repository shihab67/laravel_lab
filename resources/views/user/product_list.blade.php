@extends('user.base')
@section('content')
<div class="row">   
   @foreach ($data as $dt)
<div class="col-sm-6 mt-2">
  <div class="card" style="width: 30rem;">
    <img src="{{ asset($dt->image) }}" class="card-img-top" alt="..."  height="300">
      <div class="card-body">
          <h5 class="card-title">{{$dt->product}}</h5>
          <p class="card-text">{{$dt->desc}}</p>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">Created At: {{$dt->created_at}}</li>
              <li class="list-group-item">Updated At: {{$dt->updated_at}}</li>
          </ul>
      </div>
  </div>
</div>
@endforeach
</div>
@endsection