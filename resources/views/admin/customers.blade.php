@extends('admin.admin_base')
@section('content')
@if(session()->has('message'))
  <div class="alert alert-danger">
      {{ session()->get('message') }}
  </div>
@endif
        <table class="table container shadow-lg p-3 mb-5 bg-blue rounded" style="opacity:0.9;background:white" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">CONTACT</th>
                    <th scope="col">OPERATION</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $dt)
                        <tr class="bg-light" id="{{$dt['id']}}">
                            <th scope="row"> {{$dt['id']}} </th>
                            <td>{{$dt['name']}}</td>
                            <td>{{$dt['username']}}</td>
                            <td>{{$dt['contact']}}</td>
                            <td>
                                <a href="{{route('delete', [$dt['id']])}}" type="submit" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
@endsection