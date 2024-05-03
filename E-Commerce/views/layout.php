<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMEO</title>
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'style.css'?>">
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?= SCRIPTS. 'css'. DIRECTORY_SEPARATOR .'tiny-slider.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AT0DomiGr43YltVodg_ylTMHdnxi5aYG1wkEr-aErQwdqLtoxxBKEzkxEl75P9hTymeesSU3X78OYjcy"></script>
</head>
<body>


<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/e-commerce-BTS-SIO/E-Commerce/homepage">ALMEO<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="/e-commerce-BTS-SIO/E-Commerce/homepage">Home</a>
						</li>
						<li><a class="nav-link" href="#">Shop</a></li>
						<li><a class="nav-link" href="#">About us</a></li>
						<li><a class="nav-link" href="#">Services</a></li>
						<li><a class="nav-link" href="#">Blog</a></li>
						<li><a class="nav-link" href="#">Contact us</a></li>
            <?php
      if(isset($_SESSION['auth'])): ?>
      <li class="nav-item ">
        <a class="nav-link" href="/mvc/logout">Se deconnecter </a> 
      </li>
      <?php endif; ?>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link"  href="E-Commerce-BTS-SIO/E-Commerce/login" onclick="display_user()" data-bs-toggle="modal" data-bs-target="#modalDisplay"><img src="images/user.svg"></a></li>
						<li><a class="nav-link"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<div class="modal fade" id="modalDisplay" tabindex="-1" aria-labelledby="modal_label" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-4" id="modal_label">Modal title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" id="display_modal">
					</div>
				</div>
			</div>
		</div>
    

        <?= $content ?>
    
    
</body>
</html>
<?=print_r($_SESSION)?>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'bootstrap.bundle.min.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'tiny-slider.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'custom.js'?>"></script>
<script>
    function display_user() {
		if('<?= isset($_SESSION['auth']) ? 1 : '' ?>' !='') {
			
		} else {
			fetch('/E-Commerce-BTS-SIO/E-Commerce/login')
				.then(response => response.text())
				.then((data) => {
					document.getElementById('display_modal').innerHTML = data;
					document.getElementById('modal_label').innerHTML = "Se connecter";
			});
		}
    }
	function display_register() {
		fetch('/E-Commerce-BTS-SIO/E-Commerce/signUp')
			.then(response => response.text())
			.then((data) => {
				document.getElementById('display_modal').innerHTML = data;
				document.getElementById('modal_label').innerHTML = "S'inscrire";
		});
	}
</script>
