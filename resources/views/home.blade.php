<?php

$project_title = 'Laravel Primi Passi';

?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $project_title ?></title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid d-flex justify-content-between">
      <div>
        <a class="navbar-brand fw-bold text-danger" href="#">LARAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="navbar-nav gap-3">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('prima_pagina') }}">PAGINA 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('seconda_pagina') }}">PAGINA 2</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <h1 class="text-center mt-5 fw-bold">Hello World!</h1>
    <h2 class="text-center fw-bold">Benvenuto {{ $nome }} {{ $cognome }}</h2>

    <div class="container mt-5 mb-5">
      <h3 class=" fw-bold">Dream Team:</h3>
      <div class="d-flex flex-wrap gap-3">
        @foreach ($cards as $card)
          <div style="width: calc(100% / 3 - 2rem);" class="card border">
            <img src="{{ $card["image"] }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $card["title"] }}</h5>
              <p class="card-text">{{ $card["role"] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
</body>
</html>