<!-- resources/views/bron/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Список бронирований</h2>
        
        <!-- Форма фильтрации -->
        <form action="{{ route('brons.index') }}" method="GET">
            <div class="form-group">
                <label for="room_filter">Фильтр по комнате:</label>
                <select name="room_filter" id="room_filter" class="form-control">
                    <option value="">Все комнаты</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}" {{ $roomFilter == $room->id ? 'selected' : '' }}>
                            {{ $room->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Применить фильтр</button>
            
        </form>
        <br>
        <form action="{{ route('brons.create') }}" method="GET">
            <button type="submit" class="btn btn-primary">Добавить бронь</button>
        </form>
        
        <br>

        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Комната</th>
                    <th>Дата начала</th>
                    <th>Дата окончания</th>
                    <th>Клиент</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brons as $bron)
                    <tr>
                        <td>{{ $bron->id }}</td>
                        <td>{{ $bron->room->name }}</td>
                        <td>{{ $bron->time_of_bron }}</td>
                        <td>{{ $bron->time_of_free }}</td>
                        <td>{{ $bron->client->name }}</td>
                        <td>
                            <a href="{{ route('brons.edit', $bron->id) }}" class="btn btn-info">Изменить</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
