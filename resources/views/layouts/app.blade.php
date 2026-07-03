<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>

        body{
            margin:0;
            font-family:Arial;
            background:#f5f5f5;
        }

        header{
            background:#0d6efd;
            color:white;
            padding:20px;
        }

        nav{
            background:#212529;
            padding:12px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-right:20px;
        }

        .container{
            width:80%;
            margin:30px auto;
            background:white;
            padding:30px;
            border-radius:8px;
        }

        footer{
            background:#212529;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:40px;
        }

    </style>

</head>

<body>

<header>

    <h2>Website Portfolio</h2>

</header>

<nav>

    <a href="/home">Home</a>

    <a href="/profil">Profil</a>

    <a href="/pendidikan">Pendidikan</a>

    <a href="/keahlian">Keahlian</a>

</nav>

<div class="container">

    @yield('content')

</div>

<footer>

    Praktikum Laravel Modul 3

</footer>

</body>

</html>