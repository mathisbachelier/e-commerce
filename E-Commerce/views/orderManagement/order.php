<h1> la commande de : <?= $params['order']->id_user; ?></h1>
<hr>
<p> email : <?php echo $params['order']->email;?></p>
<p>numéro de commande : <?php echo $params['order']->order_number; ?></p>

<?php foreach ($params['product'] as $product) { ?>
    <p> produit : <?php echo $product->name; ?></p>
<?php } ?>
<ul>

</ul>
</p>
<a class="btn btn-outline-primary" href="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/">Retour en arriere </a>

