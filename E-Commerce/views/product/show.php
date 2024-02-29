<h1>nom du produit : <?= $params['product']->name; ?></h1>

<?php if(empty($params['product'])): ?>
    
    <h1>pas de produit</h1>

    <?php else : ?>
        
       <p>Description : <?= $params['product']->description; ?></p>
       <p>Prix : <?= $params['product']->price; ?> $</p>
<?php endif; ?>