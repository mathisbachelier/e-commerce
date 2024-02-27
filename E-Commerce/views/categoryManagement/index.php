<p>Liste des catégories</p>

<form style="display:inline" action="/E-Commerce-BTS-SIO/E-Commerce/categoryManagement/search" method="POST">
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" value="Rechercher">
</form>

<?php

foreach($params['categories'] as $category): ?>
    <div class="card mb-3">
      <div class="card-body">
        <p><?= $category->name ?></p>
        <form style="display:inline"  action="/E-Commerce-BTS-SIO/E-Commerce/categoryManagement/delete/<?= $category->id; ?>" method="POST">
          <input type="submit" class="btn btn-danger" value="supprimer"> 
        </form>
      </div>
    </div>
<?php endforeach ?>  