<h1>Se connecter</h1>

<form class="mt-5" 
action="/mvc/login" method="POST">

    <div class="form-group mt-2">
        <label  for="username"> 
            nom d'utilisateur
        </label>
        <input class="form-control" type="text" id="title" name="username">
    </div>
        
    <div class="form-group mt-2">
        <label  for="password"> 
          mot de passe
        </label>
        <input class="form-control" type="password" id="title" name="password">
    </div>


    
    <div class="form-group mt-2">
        <input type="submit" 
               class="btn btn-primary" value="Se connecter">
    </div>
</form>


