<!DOCTYPE html>
<html>
<head>
  <meta keywords="html,learn,teach"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/profilepagestyle.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

  <title> Profile  </title>
</head>
<body>
	 <div id="d">
    <div class="box">
    	<div class="image-container">
              <img src="{{ asset('assets/user.png') }}">
        </div>    	
        <h2> Profil </h2> 
        @if (Cookie::get('error'))
            <h4> {{Cookie::get('error')}} </h4>
        @endif
     
        <form autocomplete="off" action="/updateProfileInfo" method="POST">       
            @csrf      
            <div class="inputBox">
             <input autocomplete="off" type="text" name="name" value="{{$user->name}}">
             <label> Nom d utilisateur</label>
            </div>
            <div class="inputBox" >
                <input autocomplete="off" type="" name="email" value="{{$user->email}}">
                <label> email </label>
            </div>            
            <div class="inputBox" >
                <input autocomplete="off" type="password" name="password" required="">
                <label> Mot de passe </label>
            </div>
            <div class="inputBox" >
                <input autocomplete="off" type="password" name="repassword" required="">
                <label> Confirmer le mot de passe </label>
            </div>
        
      <input type="submit" name="" value="Modifier">
      <!--<input type="button" name="" value="Retour">
      <button type="button" onclick="Interface.html">Retour</button>-->
      <div class="inputBox"><p><a href="Interface.html">Retour</a></p>
      </div>
 
 
  </form>

</body>
</html>
