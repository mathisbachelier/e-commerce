<h1>liste des commandes </h1>
<h2>voir les commandes archivé : <a href="/e-commerce-BTS-SIO/E-Commerce/orderManagement/archived" class="btn btn-primary">ici</a> </h2>
<hr>

<?php if(empty($params['orders'])): ?>
    <p>Aucune commande à afficher</p>
<?php else: ?>
    <?php foreach($params['orders'] as $order) : ?>
        <?php if($order->status != 4 && $order->status != 3): ?>
        <div>
            <h2> Commande <?= $order->order_number ; ?> </h2>
            <p>price : <?= $order->price ?></p>
            <p>order id : <?= $order->order_id ?></p>
            
            <p>Statut : <?php if($order->status == 0): ?>
                en attente 
            <?php elseif($order->status == 1): ?>
                accepter 
            <?php elseif($order->status == 2): ?>
                validé 
            <?php elseif($order->status == 3): ?>
                refusé
            <?php elseif($order->status == 4): ?>
                archivé 

            <?php endif; ?></p>
            
            <a href="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/<?= $order->order_id ?>"class="btn btn-primary">Lire l'article</a>
            <?php if($order->status != 4): ?>
            <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/delete/<?= $order->order_id; ?>" method="POST">
                <input type="submit" class="btn btn-danger" value="refuser"> 
                  
            </form>
            <?php endif; ?>
            <?php if($order->status == 0): ?>
            <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/validate/<?= $order->order_id; ?>" method="POST">
                <input type="submit" class="btn btn-success" value="accepter"> 
                 
            </form>
            <?php endif; ?>
            <?php if($order->status == 1): ?>
            <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/validateOrder/<?= $order->order_id; ?>" method="POST">
                <input type="submit" class="btn btn-success" value="valider commande"> 
                 
            </form>
            <?php endif; ?>
            <?php if($order->status == 2): ?>
            <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/archive/<?= $order->order_id; ?>" method="POST">
                <input type="submit" class="btn btn-secondary" value="archiver"> 
                 
            </form>
            <?php endif; ?>
            <hr>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
