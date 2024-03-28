<form action="/e-commerce-BTS-SIO/E-Commerce/homepage/search" method="POST">
    <div class="row">
        <div class="col-6">
            <label for="name">Nom</label>
            <input type="text" name="name" placeholder="chercher un produit" class="form-control">
        </div>
        <div class="col-6">
            <label for="categories">catégories</label>
            <select name="categories" class="form-control">
                <option value=""></option>
                <option value="toutes">toutes</option>
                <?php foreach ($params['categories'] as $category) { ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    
    
    
    <input type="submit" value="appliquer" class="btn btn-outline-secondary">
</form>
<hr>
<?php foreach ($params['homepage'] as $homepage) { ?>
    <div class="col-6" id="homepage_product">
    <p> produit : <?php echo $homepage->name; ?></p>
    <p> prix : <?php echo $homepage->price; ?></p>
    <p> description : <?php echo $homepage->short_content; ?></p>
    </div>
    <hr>

<?php } ?>
