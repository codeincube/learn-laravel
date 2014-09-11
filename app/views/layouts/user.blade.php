<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/
css/bootstrap-combined.min.css">
    <style>
        table form { margin-bootom: 0;}
        form ul { margin-left: 0; list-style: none;}
        .error { color: red; font-style: italic;}
        body { padding-top: 20px;}
    </style>
</head>
<body>

    <div class="container">
        @if (Session::has('message'))
            <div class="flash alert">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif

        @yield('main')
    </div>
</body>
</html>
