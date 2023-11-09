@extends('rooms.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Rooms Page</div>
  <div class="card-body">
      
      <form action="{{ url('room') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop