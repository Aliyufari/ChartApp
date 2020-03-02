<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Chatty</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    </head>
    <body>
        @include('templates\partials\navigation')
       <div class="container">
            @yield('content')
       </div>
    </body>
</html>