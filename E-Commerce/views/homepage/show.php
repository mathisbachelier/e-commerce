<div class="product-details-container">
        <div class="product-info">
            <h1><?php echo $product->name; ?></h1>
            <p>Price: <?php echo $product->price; ?></p>
            <p><?php echo $product->short_content; ?></p>
            <details>
                <summary>Description</summary>
                <p><?php echo $product->content; ?></p>
            </details>
            <!-- Bouton "Ajouter au panier" -->
            <form action="/cart" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
                <input type="submit" value="Ajouter au panier">
            </form>
        </div>
</div>