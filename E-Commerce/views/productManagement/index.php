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
                    <?php foreach($params['porducts'] as $porduct): ?>
                        <tr>
                            <td style="text-align: center;"><?= $porduct->name ?></td>
                            <td style="text-align: center;"><?= $porduct->price ?></td>
                            <td style="text-align: center;"><?= $porduct->stock ?></td>
                            <td style="text-align: center;"><a href="/E-Commerce-BTS-SIO/E-Commerce/productManagement/edit/<?= $porduct->id ?>">Modifier</a></td>
                            <td style="text-align: center;"><a href="/E-Commerce-BTS-SIO/E-Commerce/productManagement/destroy/<?= $porduct->id ?>">Supprimer</a></td> 
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>