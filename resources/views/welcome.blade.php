<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"style="width: 40rem;">
                <div class="card-header">Online Support
</div>

                <div class="card-body" >
              
                        <button type="button" onclick="window.location='{{ url("create-ticket-view") }}'" class="btn btn-primary btn-lg btn-block">Create ticket</button>
                        <button type="button" onclick="window.location='{{ url("view-ticket") }}'" class="btn btn-success btn-lg btn-block">View ticket</button>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>