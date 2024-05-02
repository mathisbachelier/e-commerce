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
<body style="">


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
						<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
						<form id="cartForm" action="/e-commerce-BTS-SIO/E-Commerce/cart" method="GET">
							<input type="hidden" id="cartData" name="cart">
							<li><a class="nav-link" onclick="sendCart()"><img src="images/cart.svg"></a></li>
						</form>
					</ul>
				</div>
			</div>
				
		</nav>
    

        <?= $content ?>
    
    
</body>
</html>

<script>

function addToCart(id) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let itemExists = false;

    for (let i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
            cart[i].quantity++;
            itemExists = true;
            break;
        }
    }

    if (!itemExists) {
        let item = {id: id, quantity: document.getElementById('quantity-product').value};
        cart.push(item);
    }

    localStorage.setItem('cart', JSON.stringify(cart));
}


  // Function to delete an item from the cart in localStorage
  function removeFromCart(id) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    for (let i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
            cart.splice(i, 1);
            break;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cart));
	sendCart();

}


  function updateQuantity(id, q) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    id = parseInt(id);
    q = parseInt(q);
    for (var i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
            cart[i].quantity = q;
            break;
        }
    }
    localStorage.setItem('cart', JSON.stringify(cart));
	sendCart();
}


	function updateQuantityButton(id, type) {

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    for (var i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
			if (type === 'decrease') {
				if (cart[i].quantity > 1) {
					cart[i].quantity--;
				}
			} else if (type === 'increase') {
				cart[i].quantity++;
			}
            break;
        }
    }

    // Mettre à jour le localStorage avec les nouvelles données du panier
    localStorage.setItem('cart', JSON.stringify(cart));
	sendCart();

}

function sendCart() {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  document.getElementById('cartData').value = JSON.stringify(cart);
  document.getElementById('cartForm').submit();
}

function showText(){
    var text = document.getElementById("hiddenText");
    text.style.display = "block";
}

</script>

<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'bootstrap.bundle.min.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'tiny-slider.js'?>"></script>
<script src="<?= SCRIPTS. 'js'. DIRECTORY_SEPARATOR .'custom.js'?>"></script>
