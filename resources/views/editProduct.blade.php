<link rel="stylesheet" href="{{('css/semua.css')}}">

@extends('layouts.app')

<style>
.table{
    margin:auto;
}


.form-group{
    display: flex;
    margin-right:10px;
}

.form-group button{
    display: inline;
    margin-right:5px;
}

</style>

@section('content')

<table class="table table-hover table-dark" style="width:70%;">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Stationary Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $key => $c)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$c->name}}</td>
      <td>
            <div class="form-group" style="width:80%;" >
             <label for="exampleFormControlInput1"></label>
             <form action="{{url('editProduct/'.$c->id)}}" method="post" class="d-flex">
              @csrf
              <input type="text" name="{{'name'.$c->id}}" class="form-control" id="exampleFormControlInput1" placeholder="Type Name" style="margin-right:10px;">
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <form action="{{url('deleteCategory/'.$c->id)}}" method="post">
              @csrf
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
            @error('name'.$c->id)
              <strong>{{ $message }}</strong>
          @enderror
            
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection