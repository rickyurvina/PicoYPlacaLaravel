<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test StackBuilders</title>
    </head>


    <link rel="stylesheet" href="../css/app.css">

        <body class="fondo">

            <h1 class="titulo">Satck Builders</h1>
            @yield('content')
            <footer>Copyright {{date('Y')}}</footer>

        </body>

</html>
