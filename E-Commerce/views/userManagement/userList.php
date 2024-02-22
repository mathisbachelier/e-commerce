<p>Liste des utilisateurs</p>

<?php

foreach($params['users'] as $user): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h2> <?= $user->email ?></h2>
        <form style="display:inline"  action="/E-Commerce-BTS-SIO/E-Commerce/user_management/deleteUser/<?= $user->id; ?>" method="POST">
          <input type="submit" class="btn btn-danger" value="supprimer"> 
        </form>
        </div>
   </div>
<?php endforeach ?>