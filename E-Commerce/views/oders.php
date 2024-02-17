<h1>liste des commandes</h1>

<?php 
foreach($params['orders'] as $order){
   ?><h2> <?= $order->customer . " " . $order->item; ?> </h2>
   
   <form style="display:inline"  action="/e-commerce-BTS-SIO/E-Commerce/orders/delete/<?= $order->id; ?>" method="POST">
                <input type="submit" class="btn btn-danger" value="supprimer"> 
                
                </form>
   <hr> <?php
}