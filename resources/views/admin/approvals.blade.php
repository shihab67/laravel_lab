@extends('admin.admin_base')
@section('content')
@if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif
        <table class="table container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.9;background:white" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">OPERATION</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                        <tr class="bg-light" id="{{$dt['id']}}">
                            <th scope="row"> {{$dt['id']}} </th>
                            <td>{{$dt['name']}}</td>
                            <td>{{$dt['username']}}</td>
                            <td>{{$dt['password']}}</td>
                            <td>
                                <a href="{{route('approve', [$dt['id']])}}" type="submit" class="btn btn-primary">Approve</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
@endsection