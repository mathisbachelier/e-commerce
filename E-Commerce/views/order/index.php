<?php if(!empty($params['orders'])): ?>
<h1>Mes commandes</h1>
<hr>
<ul>
    <?php foreach ($params['orders'] as $order) { ?>
        <li> <a href="/e-commerce-BTS-SIO/E-Commerce/userOrder/<?= $order->id;?>"> Commande n° <?= $order->order_number; ?></a></li>
        <?= $order->id; ?>
    <?php } ?>
</ul>
<?php endif; ?>
