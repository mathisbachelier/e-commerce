<div class="product-details-container">
        <div class="product-info">
            <h1><?= $params['product']->name ?></h1>
            <p><?= $params['product']->content ?></p>
            <p><?= $params['product']->short_content ?></p>
            <p><?= $params['product']->price ?> €</p>
            <a href="/cart/add/<?= $params['product']->id ?>">Ajouter au panier</a>
        </div>
</div>