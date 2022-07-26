<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Dolan Banyumas</title>
</head>
<body>
    @include('components.user.navbar')

    @yield('content')
    {{-- cdn flowbite js --}}
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script> 
    {{-- cdn flowbite datepicker --}}
    <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>
</body>
</html>