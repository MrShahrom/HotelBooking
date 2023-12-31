@extends('brons.layout')

@section('content')
    <div class="container">
        <h1>Страница бронирования</h1>

        <form action="{{ route('brons.store') }}" method="post">
            @csrf
            @method('POST')
            <!-- Выбор комнаты -->
            <label for="room_id">Выберите комнату:</label>
            <select name="room_id" id="room_id" required>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </select>

            <!-- Время начала бронирования -->
            <label for="time_of_bron">Время начала бронирования:</label>
            <input type="datetime-local" name="time_of_bron" id="time_of_bron" required>

            <!-- Время окончания бронирования -->
            <label for="time_of_free">Время окончания бронирования:</label>
            <input type="datetime-local" name="time_of_free" id="time_of_free" required>

            <!-- Выбор клиента -->
            <label for="client_id">Выберите клиента:</label>
            <select name="client_id" id="client_id" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Добавить бронь</button>
        </form>
    </div>
@endsection
