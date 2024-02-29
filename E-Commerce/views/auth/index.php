<h1>Se connecter</h1>

<form class="mt-5" 
action="/E-Commerce-BTS-SIO/E-Commerce/login" method="POST">

    <div class="form-group mt-2">
        <label  for="email"> 
            nom d'utilisateur
        </label>
        <input class="form-control" type="text" id="email" name="email">
    </div>
        
    <div class="form-group mt-2">
        <label  for="password">Mot de passe</label>
        <input class="form-control" type="password" id="password" name="password">
    </div>


    
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
    <div class="form-group mt-2">
        <button type="button" class="btn btn-primary" onclick="window.location.href='/E-Commerce-BTS-SIO/E-Commerce/signUp'">S'inscrire</button>
    </div>
</form>


