<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Style CSS-->
    <link rel="stylesheet" href="/css/style.css">

    <!--Script de adicionar jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--Script de adicionar Popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!--Script de adicionar Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!--Chamando JS-->
    <script src="/js/scriptbotao.js"></script>
    <script src="/js/scriptlistaprodutos.js"></script>

    <!--Script de adicionar icons-->
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>@yield('title')</title>
</head>

<body style="background-color: rgba(137, 43, 226, 0.637)">
    @yield('content')
</body>

</html>
