<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/user_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0&appId=424111672365062&autoLogAppEvents=1" nonce="3eQbwOvG"></script>
  </head>
  <body>

<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
        <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/logo1.png" alt=""></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Hai <?= session()->get('nama') ?> <i class="fas fa-smile-beam"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LoginUserC/logout">Log Out <i class="fas fa-door-open"></i> </a>
                </li>
            </ul>
        </div>
    </nav>
