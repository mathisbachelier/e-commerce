<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Modifier le produit <?= $params['porduct']->name ?></h1>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <form action="/E-Commerce-BTS-SIO/E-Commerce/productManagement/edit/<?= $params['porduct']->id ?>" method="post">
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $params['porduct']->name ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="tex" class="form-control" id="description" name="description" value="<?= $params['porduct']->description ?>">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $params['porduct']->price ?>">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?= $params['porduct']->stock ?>">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>