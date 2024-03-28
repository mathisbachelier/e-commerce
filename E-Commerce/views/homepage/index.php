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
<div class="row" id="recent_add">
    <h2>produits récemment ajouter</h1>
<?php foreach ($params['homepage'] as $homepage) { ?>
    <div class="col-6" id="homepage_product">
    <p> produit : <?php echo $homepage->name; ?></p>
    <p> prix : <?php echo $homepage->price; ?></p>
    <p> description : <?php echo $homepage->short_content; ?></p>
    </div>
    <hr>

<?php } ?>

</div>
<div class="row" id="random_books">
    
    <h2>produit que vous pouriez aimer dans la catégory <?= $params['randomBooks'][0]->category_name ?></h1>
<?php foreach ($params['randomBooks'] as $randombooks) { ?>
    <div class="col-6" id="random_book">
    <p> produit : <?php echo $randombooks->name; ?></p>
    <p> prix : <?php echo $randombooks->price; ?></p>
    <p> description : <?php echo $randombooks->short_content; ?></p>
    </div>
    <hr>

<?php } ?>
</div>
<div class="row" id="random_électronics">
    <h2>produit que vous pouriez aimer dans la catégory <?= $params['randomElectronic'][0]->category_name ?></h1>
<?php foreach ($params['randomElectronic'] as $randomElectronic) { ?>
    <div class="col-6" id="random_book">
    <p> produit : <?php echo $randomElectronic->name; ?></p>
    <p> prix : <?php echo $randomElectronic->price; ?></p>
    <p> description : <?php echo $randomElectronic->short_content; ?></p>
    </div>
    <hr>

<?php } ?>
</div>
<div class="row" id="random_clothing">
    <h2>produit que vous pouriez aimer dans la catégory <?= $params['randomClothing'][0]->category_name ?></h1>
<?php foreach ($params['randomClothing'] as $randomClothing) { ?>
    <div class="col-6" id="random_Clothing">
    <p> produit : <?php echo $randomClothing->name; ?></p>
    <p> prix : <?php echo $randomClothing->price; ?></p>
    <p> description : <?php echo $randomClothing->short_content; ?></p>
    </div>
    <hr>

<?php } ?>
</div>

