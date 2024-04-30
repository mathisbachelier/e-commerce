<script>
function getQuantity(id) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
	id = parseInt(id);
    for (let i = 0; i < cart.length; i++) {
        if (cart[i].id === id) {
            document.getElementById('quantity-amount-' + id).value = cart[i].quantity;
			break;
        }
    }
}

function calculateTotal() {

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let total = 0;
    for (let i = 0; i < cart.length; i++) {
        let price = parseInt(document.getElementById('price-' + cart[i].id).innerHTML);
        let q = parseInt(cart[i].quantity);
        total += price * q;
    }
    document.getElementById('total-amount').innerHTML = "€ " +total;
}

</script>


<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Panier</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Produit</th>
                                <th class="product-price">Prix</th>
                                <th class="product-quantity">Quantité</th>
                                <th class="product-remove">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $isEmpty = empty($params['products']);
                                if($isEmpty): ?>
                                    <p>Votre panier est vide.</p>
                                <?php else: ?>
                                    <?php foreach($params['products'] as $products):
                                            foreach($products as $product):?>    
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <img src="<?= $product->image ?>" alt="Image" class="img-fluid">
                                                    </td>
                                                    <td class="product-name">
                                                        <a class="h5 text-black" href="E-Commerce-BTS-SIO/E-Commerce/product/<?= $product->id ?>"><?= $product->name ?></a>
                                                    </td>
                                                    <td id="price-<?= $product->id ?>"><?= $product->price ?></td>
                                                    <td style= display:ruby-text;>
                                                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 150px;">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-black decrease"  id="quantity-button" type="button" onclick="updateQuantityButton(<?= $product->id ?>, 'decrease')">&minus;</button>
                                                            </div>
                                                            <input type="text" class="form-control text-center quantity-amount" id="quantity-amount-<?= $product->id ?>" value="1" onkeyup="updateQuantity(<?= $product->id ?>, this.value)" placeholder="">
                                                            <script>
                                                                getQuantity(<?= $product->id ?>);
                                                            </script>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-black increase" type="button" onclick="updateQuantityButton(<?= $product->id ?>, 'increase')">&plus;</button>
                                                            </div>  
                                                        </div>          
                                                    </td>
                                                    <td><a onclick="removeFromCart(<?= $product->id ?>)" class="btn btn-black btn-sm">X</a></td>
                                                </tr>
                                    <?php endforeach ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>                         
                    <strong>Total: </strong><span id="total-amount"></span>                       
                    <script>calculateTotal();</script>
                </div>
            </form>
        </div>
        <button class="btn btn-success">Commander</button>
    </div>
</div>
                                                


    