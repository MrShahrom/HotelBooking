@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Редактировать бронирование</h2>
        <form action="{{ route('brons.update', $bron->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" id="id" value="{{ $bron->id }}" />

            <label>Комната</label><br>
            <select name="room_id" class="form-control">
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}" {{ $bron->room_id == $room->id ? 'selected' : '' }}>
                        {{ $room->name }}
                    </option>
                @endforeach
            </select><br>

            <label>Дата начала</label><br>
            <input type="text" name="time_of_bron" id="time_of_bron" value="{{ $bron->time_of_bron }}" class="form-control"><br>

            <label>Дата окончания</label><br>
            <input type="text" name="time_of_free" id="time_of_free" value="{{ $bron->time_of_free }}" class="form-control"><br>

            <label>Клиент</label><br>
            <select name="client_id" class="form-control">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $bron->client_id == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select><br>

            <input type="submit" value="Update" class="btn btn-success">
        </form>
        <br>
        <a href="{{ route('brons.index') }}" class="btn btn-primary">Назад</a>
    </div>
@endsection
