<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/lib/fontawesome/css/all.min.css') }}">
    @yield('style')
</head>
<body>
    <div class="container-wrapper">
        <main>
            @yield('content')
        </main>
    </div>


    <!-- Bootstrap -->
    <script src="{{ asset('/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')
</body>
</html>