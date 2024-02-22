<h1>liste des commandes</h1>

<?php 
foreach($params['orders'] as $order){
   ?><h2> <?= $order->customer . " " . $order->item; ?> </h2>
   <a href="/e-commerce-BTS-SIO/E-Commerce/orders/<?= $order->id ?>"class="btn btn-primary">Lire l'article</a>
   
   <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orders/delete/<?= $order->id; ?>" method="POST">
                <input type="submit" class="btn btn-danger" value="supprimer"> 
                
                </form>
   <hr> <?php
}