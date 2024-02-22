<div class="col-12">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Liste des produits</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">Nom</th>
                        <th style="text-align: center;">Prix</th>
                        <th style="text-align: center;">Stock</th>
                        <th style="text-align: center;">Modifier</th>
                        <th style="text-align: center;">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($params['products'] as $product): ?>
                        <tr>
                            <td style="text-align: center;"><?= $product->name ?></td>
                            <td style="text-align: center;"><?= $product->price ?></td>
                            <td style="text-align: center;"><?= $product->stock ?></td>
                            <td style="text-align: center;"><a href="/E-Commerce-BTS-SIO/E-Commerce/productManagement/edit/<?= $product->id ?>">Modifier</a></td>
                            <td style="text-align: center;">
                                <form action="/E-Commerce-BTS-SIO/E-Commerce/productManagement/delete/<?= $product->id ?>" method="post" style="display: inline;">
                                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-2 offset-5">
        <div class="row">
            <button type="button" class="btn btn-outline-primary" onclick="window.location.href='/E-Commerce-BTS-SIO/E-Commerce/productManagement/create'">Ajouter un produit</button>
        </div>
    </div>
</div>