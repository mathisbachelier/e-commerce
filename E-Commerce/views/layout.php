<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMEO</title>
    <link href="<?= Style?>/style.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= Style?>/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="<?= Style?>/tiny-slider.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/e-commerce-BTS-SIO/E-Commerce/homepage/index">ALMEO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/e-commerce-BTS-SIO/E-Commerce/homepage/index">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les derniers articles</a>
      </li>
      
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <?php
      if(isset($_SESSION['auth'])): ?>
      <li class="nav-item ">
        <a class="nav-link" href="/mvc/logout">Se deconnecter </a> 
      </li>
      <?php endif; ?>
      
    </ul>
   
  </div>
</nav>

    <div class="container">
        <?= $content ?>
    </div>

    <script src="<?= Style?>/bootstrap.bundle.min.js"></script>
    <script src="<?= Style?>/tiny-slider.js"></script>
    <script src="<?= Style?>/custom.js"></script>
</body>
</html>