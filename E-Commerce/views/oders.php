<h1>liste des commandes</h1>

<?php 
foreach($params['orders'] as $order){
   ?><h2> <?= $order->customer . " " . $order->item; ?></h2> <?php
}