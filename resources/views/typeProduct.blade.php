<script src="{{ asset('js/addimage.js') }}" defer></script>
<link rel="stylesheet" href="{{('css/semua.css')}}">
@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style>

  .table{
    margin-left:200px;
  }

  .content{
    display:flex;
  }

  .file {
  visibility: hidden;
  position: absolute;
}


</style>

@section('content')
<div class="content">
<table class="table table-dark" style="width:30%;">


  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Stationary Type Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $key => $c)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$c->name}}</td>
    </tr>
    @endforeach
  </tbody>
  </table>

  <div class="ml-2 col-sm-6">
  <div id="msg">
  </div>
  <form method="post" id="image-form" enctype="multipart/form-data" action="{{url('addTypeProduct')}}">
    @csrf
  <div class="ml-2 col-sm-6" style="width:140px" style="height: 140px">
      <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
    </div>
    <input type="file" name="image" class="file" accept="image/*" >
    <div class="input-group my-3">
      <input type="text" name="img" class="form-control" disabled placeholder="Upload File" id="file">
      <div class="input-group-append" style="width:70%">
        <button type="button" class="browse btn btn-primary">Browse...</button>
      </div>
    </div>
    @error('image')
              <strong>{{ $message }}</strong>
          @enderror

    <div class="form-group" style="width:50%;">
    <label for="formGroupExampleInput"></label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Stationary Type Name">
    @error('name')
              <strong>{{ $message }}</strong>
          @enderror
  </div>

  <button type="submit" class="btn btn-primary">Add New Stationary Type</button>

</div>
  





@endsection