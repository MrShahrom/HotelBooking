@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Редактировать бронирование</h2>
        <form action="{{ route('brons.update', $bron->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" id="id" value="{{ $bron->id }}" />

            <label>Комната</label><br>
            <input type="text" name="name" id="name" value="{{ $bron->room->name }}" class="form-control"><br>

            
            <label>Дата начала</label><br>
            <input type="text" name="email" id="email" value="{{ $bron->time_of_bron }}" class="form-control"><br>

            <label>Дата окончания</label><br>
            <input type="text" name="status" id="status" value="{{ $bron->time_of_free }}" class="form-control"><br>

            <label>Клиент</label><br>
            <input type="text" name="status" id="status" value="{{ $bron->client->name }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success">
        </form>
        <br>
        <a href="{{ route('brons.index') }}" class="btn btn-primary">Назад</a>
    </div>
@endsection
