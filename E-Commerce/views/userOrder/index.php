<?php if(!empty($params['orders'])): ?>
    
<div class="hero">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-5">
                <h1>Mes commandes</h1>

			</div>
		</div>
        
	</div>
</div>

<div class="untree_co-section before-footer-section">
    <h2>Vos commandes les plus récentes</h2>
<ul>
    <?php foreach ($params['orders'] as $order) { ?>
    <div id="userOrderDiv">
        <li> <a id="userOrderDiv-a" href="/e-commerce-BTS-SIO/E-Commerce/userOrder/<?= $order->id;?>"> Commande n° <?= $order->order_number; ?></a>
        
            <button type="button" class="btn btn-outline-secondary" onclick="document.location.href='/e-commerce-BTS-SIO/E-Commerce/userOrder/<?= $order->id;?>'">
                voir votre commande
            </button>
        </li>
    </div>
        
    <?php } ?>
</ul>
<?php endif; ?>
    </div>
