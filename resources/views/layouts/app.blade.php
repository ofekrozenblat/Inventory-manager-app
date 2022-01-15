<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    @yield('scripts')

    <title>{{ config('app.name') }}</title>
</head>
<div class="container-fluid">
    <div class="row min-height">
        <div class="col-12 mt-1">
            @yield('content')
        </div>
    </div>
</div>
</body>

</html>
