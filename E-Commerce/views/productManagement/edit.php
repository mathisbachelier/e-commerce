<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Modifier le produit <?= $params['product']->name ?></h1>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <form action="/E-Commerce-BTS-SIO/E-Commerce/productManagement/edit/<?= $params['product']->id ?>" method="post">
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $params['product']->name ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="tex" class="form-control" id="description" name="description" value="<?= $params['product']->description ?>">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $params['product']->price ?>">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?= $params['product']->stock ?>">
                </div>
                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    <select class="form-control" name="category_id" id="category_id"></select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>