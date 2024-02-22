<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Nouveau produit</h1>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <form action="/E-Commerce-BTS-SIO/E-Commerce/productManagement/create/" method="post">
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="tex" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                </div>
                <div class="form-group">
                    <label for="category_id">Catégorie</label>
                    <select class="form-control" name="category_id" id="category_id"></select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>