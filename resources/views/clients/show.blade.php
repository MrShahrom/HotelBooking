@extends('clients.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Clients Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $clients->name }}</h5>
        <p class="card-text">Email : {{ $clients->email }}</p>
        <p class="card-text">Status : {{ $clients->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>