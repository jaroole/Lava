<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wifth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

        <span class="fs-4 text-white" >Конвертор</span>
      </a>

      
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">Про проект</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/contact">Контакты</a>
                <!-- <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a> -->
      </nav>
      <a class="btn btn-secondary" href="#">Оставить отзыв</a>
    </div>
@yield('content')

@include('inc.aside')
</body>
</html>