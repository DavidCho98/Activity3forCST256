<!doctype html>
<html lang="{{str_replace('_','_',app()->getLocale())}}"></html>

<head>

    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My first laravel project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about-us">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact-us">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products">Products</a>
        </li>
    </ul>

    <div class="container">
        @yield('content')
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
