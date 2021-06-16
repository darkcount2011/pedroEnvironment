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
        <h1>UH-OH</h1>
        <h2>404 -The page you requested could not be found.</h2>
        <p>This can be caused by the page being deleted, renamed or temporarily disabled.</p>

            <div class=""><a href="{{route('dashboard.index')}}" class="btn m-1 btn-primary">Dashboard</a></div>
            <a onclick="window.history.back()" class="btn m-1 btn-primary">Return</a>




    </div>

</div>
</body>

</html>
