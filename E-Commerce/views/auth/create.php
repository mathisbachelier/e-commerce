<h1>Se connecter</h1>

<form class="mt-5" 
action="/E-Commerce-BTS-SIO/E-Commerce/signUp" method="POST">
    <div class="form-group mt-2">
        <label  for="last_name">Nom</label>
        <input class="form-control" type="text" id="last_name" name="last_name">
    </div>
    <div class="form-group mt-2">
        <label  for="first_name">Prénom</label>
        <input class="form-control" type="text" id="first_name" name="first_name">
    </div>
    <div class="form-group mt-2">
        <label  for="password">Mots de passe</label>
        <input class="form-control" type="text" id="password" name="password">
    </div>
    <div class="form-group mt-2">
        <label  for="email">E-mail</label>
        <input class="form-control" type="text" id="email" name="email">
    </div>
    <div class="form-group mt-2">
        <label  for="date_of_birth">Date de naissance</label>
        <input class="form-control" type="date" id="date_of_birth" name="date_of_birth">
    </div>
    <div class="form-group mt-2">
        <label  for="gender">Civilité</label>
        <select class="form-control" id="gender" name="gender">
            <option value="0">Homme</option>
            <option value="1">Femme</option>
            <option value="2">Non spécifié</option>
        </select>
    </div>
    <div class="form-group mt-2">
        <input type="submit" class="btn btn-primary" value="Se connecter">
    </div>
</form>


