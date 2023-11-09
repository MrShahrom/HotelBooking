@extends('rooms.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Rooms Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $rooms->name }}</h5>
        <p class="card-text">Status : {{ $rooms->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>