<h1>Votre panier</h1>

<?php

$cart_products = [
    'name' => "Cacapipi",
    'short_content' => "Caca bien mou.",
    'price' => 100,
    'quantity' => 2,
];
?>

<?= "<script>localStorage.setItem('key', '$cart_products')</script>"; ?>
<p><?= $cart_products['name'] ?></p>
<p><?= $cart_products['short_content'] ?></p>
<p><?= $cart_products['price'] ?></p>
<p><?= $cart_products['quantity'] ?></p>

<?php

foreach($params['products'] as $product): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h3><?= $name ?></h3>
        <p><?= $product->short_content ?></p>
        <p><?= $product->price ?>€</p>
        <div class="row">
            <div class="col-1"> 
                <form style="display:inline-block"  action="/E-Commerce-BTS-SIO/E-Commerce/cart/editQuantity/<?= $product->id; ?>" method="POST">
                    <input type="submit" class="btn btn-primary" name="value" value="-"> 
                </form>
            </div>
            <div class="col-1">
                <p><?= $product->quantity ?></p>
            </div>
            <div class="col-1">
                <form style="display:inline-block"  action="/E-Commerce-BTS-SIO/E-Commerce/cart/increaseQuantity/<?= $product->id; ?>" method="POST">
                    <input type="submit" class="btn btn-primary" value="+"> 
                </form>
            </div>
            <form style="display:inline-block"  action="/E-Commerce-BTS-SIO/E-Commerce/cart/delete/<?= $product->id; ?>" method="POST">
            <input type="submit" class="btn btn-outline-danger" value="Supprimer"> 
            </form>
        </div>
      </div>
    </div>
<?php endforeach ?>
