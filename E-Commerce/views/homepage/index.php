<form action="/e-commerce-BTS-SIO/E-Commerce/orderManagement/search" method="POST">
    <div class="row">
        <div class="col-6">
            <label for="name">Nom</label>
            <input type="text" name="name" placeholder="chercher par nom ou numero de commande" class="form-control">
        </div>
        <div class="col-6">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="5"></option>
                <option value="5">Tous</option>    
                <option value= 4 >archive</option>
                <option value= 3 >refuser</option>
                <option value= 2 >validé</option>
                <option value= 1 >accpeter</option>
                <option value= 0 >en attente</option>
            </select>
        </div>
    </div>
    
    
    <input type="submit" value="appliquer" class="btn btn-outline-secondary">
</form>
<?php foreach ($params['homepage'] as $homepage) { ?>
    <div class="col-6" id="homepage_product">
    <p> produit : <?php echo $homepage->name; ?></p>
    <p> prix : <?php echo $homepage->price; ?></p>
    <p> description : <?php echo $homepage->short_content; ?></p>
    </div>

<?php } ?>

