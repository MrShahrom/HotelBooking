@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Редактировать бронирование</h2>
        <form action="{{ route('bron.update', $bron->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Форма аналогична представлению для создания -->
            @include('bron.form', ['buttonText' => 'Обновить'])
        </form>
        <a href="{{ route('bron.index') }}" class="btn btn-primary">Назад</a>
    </div>
@endsection