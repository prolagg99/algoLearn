<!DOCTYPE html>
<html>
<head>
	<meta keywords="html,learn,teach"/>
	<link rel="stylesheet" type="text/css" href="assets/Aboutpagestyle.css">
	<link rel="stylesheet" href="assets/css/all.css">


	<title> À propos de </title>
</head>
<body>
	<div id="d">
    
                <div id="d2">
    <!--<img src="contrat-picto-337x325.png" width="100px" height="60px" />
    <img src="Apprentissage (1).jpg" width="120px" height="60px" />-->
                 <div class=l>
   <!--<div id='d8'><img src="contrat-picto-337x325.png" width="120px" height="100px" />
    </div>
     <div id='d8'><img src="56874401_631837903927267_8978154448207478784_n.png" width="120px" height="100px" />
    </div>-->
                  <div id='d8'><img src="assets/images/5695.png" width="120px" height="100px" />
                  </div>
					<ul>

						<li><a href="/">Acceuil</a></li>
						<li><a href="/chapitres">Cours</a></li>
						<li><a href="/about">À propos de</a></li>
						<li><a href="/contact/create">contact</a></li>
						<li><a href="{{ asset('assets/algobox/algoboxwin64usb.zip') }}">simulateur</a></li>
					</ul>
				  <br/><br/>
				  <!--<div class="inputBox" style="color : blue"><p><a href="#">Connecter</a></p>
				  </div>-->
				  <div class="inputBox" style="color : blue">
						@if (Auth::guest())
							<p><a href="/login">Connecter</a></p>
						@else
					  
						<p id="dropdown-opener"><a href="#">{{Auth::user()->name}}</a></p>
						<p class="dropdown-content" style="margin-top: -78px;" >
							<a href="/profile">profile</a>

						  <a id="logoutButton" href="#">déconnecter</a>
						  @if (Auth::user()->role == "admin")
						  <a href="admin/welcome">Admin Panel</a>
						  @endif
						</p>
						@endif
					</div>
					<div class="dropdown-overlay"></div>
					<form id="logoutform" method="POST" action="/logout">
						@csrf
					</form>
				
     </div>
<div class="page">
	<div class="team-section">
		<h1>À propos de</h1>
		<span class="border"></span>
		<div class="ps">
			<a href="#p1"><img src="assets/images/5695.png" alt=""></a>
			<!--<a href="#p2"><img src="user.png" alt=""></a>-->
		</div>
		
		<div class="section" id="p1">
			<span class="name"> Algo Learn</span>
			<span class="border"></span>
			<p>
				<center>
						ALGO LEARN est un environnement d’apprentissage online peut prendre comme outil d’aide pour minimiser les difficultés des apprenants dans l'algorithmique.
						<br> ALGO LEARN est basé sur l’apprentissage d'algorithme à l'aide de la simulation sous forme des cours ; chaque cours se terminé par une évaluation (QCM) pour que l’apprenant puisse tester et contrôler ses connaissances prises pendant le cours. Pour passer au cours suivant l’apprenant doit faire obligatoirement l’évaluation et obtenir au minimum un score de 50%.						
				</center>
			</p>
		</div>
	</div>
</div>
<script src="assets/js/jquery-3.4.1.min.js"></script>

<script>
  $(document).ready(function(){
            
            $('#dropdown-opener').click(function(){
                $('.dropdown-content').fadeToggle();
                $('.dropdown-overlay').toggle();
            });
      
            $('.dropdown-overlay').click(function() {
                $('.dropdown-content').fadeOut();
                $('.dropdown-overlay').hide();
            });
      
            $('#logoutButton').click(function(){
                $('#logoutform').submit();
            });
        });
</script>
</body>
</html>