<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMEO</title>
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'style.css'?>">
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'tiny-slider.css'?>">
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
        <a class="nav-link id" href="#" >Les derniers articless</a>
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

        <?= $content ?>
    
    
</body>
</html>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'bootstrap.bundle.min.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'tiny-slider.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'custom.js'?>"></script>
