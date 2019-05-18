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
        
        <form method="POST" action="/login" autocomplete="false">
                @csrf
            
            <div class="inputBox">
             <input type="email" name="email" required value="{{ old('email')}}">
             <label> Adresse e-mail</label>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong style="color: rgb(255, 204, 0);">{{ $errors->first('email') }}</strong>
                </span>
            @endif
            
            <div class="inputBox" >
                <input type="password" name="password" required>
                <label> Mot de passe </label>
            </div>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
      <input type="submit" name="" value="Login">
      <div class="inputBox"><p><a href="{{ Cookie::get('lastpage2') }}">Retour</a></p>
      </div>

	<br/><br>
        
        
            <h4><a class="" href="/password/reset">
                Mot de passe oublier
            </a></h4>
        
        <h4><a href="/register"> J'ai pas de compte </a></h4>
    
	</form>

</div>
   </body>
   </html>