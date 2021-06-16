<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4f97b630c.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container mt-5 pt-5">
    <div class="text-center">
        <i class="far fa-frown fa-10x"></i>
        <h1>500 Server Error</h1>
        <h2>Something went wrong on our side.
            We are working on the problem.
        </h2>
        <p>In the meantime you can try to refresh the page, return to the page you came from or go back to the dashboard.
            If the problem still exists we recommend to enjoy life and come back later!</p>
            <br>
        <div class=""><a href="{{route('dashboard.index')}}" class="btn m-1 btn-primary">Dashboard</a></div>
        <a onclick="window.history.back()" class="btn m-1 btn-primary">Return</a>
    </div>

</div>
</body>

</html>
