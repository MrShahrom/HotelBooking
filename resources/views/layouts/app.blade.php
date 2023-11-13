<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <!-- Подключение стилей Bootstrap (предполагается, что у вас установлен Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Подключение стилей для датапикера (предполагается, что у вас установлен Bootstrap Datepicker) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Подключение стилей приложения -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('brons.index') }}">Hotel Booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Добавьте ссылки на другие страницы по мере необходимости -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('brons.index') }}">Бронирования</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('room.index') }}">Комнаты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.index') }}">Клиенты</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Подключение скриптов Bootstrap и jQuery (предполагается, что у вас установлен Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Подключение скрипта для датапикера (предполагается, что у вас установлен Bootstrap Datepicker) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Подключение скриптов приложения -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
