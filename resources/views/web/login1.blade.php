<!DOCTYPE html>
<html>
<head>
  <meta keywords="html,learn,teach"/>
  <link rel="stylesheet" type="text/css" href="assets/login1style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <title> Login </title>
</head>
<body>



<div class="box">
        
        <h2>Connexion</h2>
        
        <form method="POST" action="{{ route('login') }}">
                @csrf
            
            <div class="inputBox">
             <input type="email" name="email" required="">
             <label> Adresse e-mail</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label> Mot de passe </label>
            </div>

      <input type="submit" name="" value="{{ __('Login') }}">
      <div class="inputBox"><p><a href="{{ URL::previous() }}">Retour</a></p>
      </div>

	<br/><br>
    
        @if (Route::has('password.request'))
            <h4><a class="" href="/mdpoublier">
                {{ __('Mot de passe oublier') }}
            </a></h4>
        @endif
        <h4><a href="/inscription"> J'ai pas de compte </a></h4>
    
	</form>
    




</div>
   </body>
   </html>