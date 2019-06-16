<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href={{ asset('assets/chapitre1style.css') }}>
  <link rel="stylesheet" href={{ asset('assets/css/all.css') }}>


	<title> Cours </title>
</head>
<body>
    <div id="d">
    <div class=l>
   <!--<div id='d8'><img src="contrat-picto-337x325.png" width="120px" height="100px" />
    </div>-->
    <div id='d8'>
        <a href="/"><img src="{{ url('/') }}/assets/images/5695.png" width="120px" height="100px" /></a>
      </div>

        <ul>

        <li><a href="/">Acceuil</a></li>
        <li><a href="/chapitres">Cours</a></li>
        <li><a href="/about">À propos de</a></li>
        <li><a href="/contact/create">contact</a></li>
        <li><a href="#">simulateur</a></li>
        </ul>
        <br/><br/>
        

        <div class="inputBox" style="color : blue">
            @if (Auth::guest())
                <p><a href="/login">Connecter</a></p>
            @else
          
            <p id="dropdown-opener"><a href="#">{{Auth::user()->name}}</a></p>
            <p class="dropdown-content">
              <a href="/profile">profile</a>
              <a id="logoutButton" href="#">déconnecter</a>
              @if (Auth::user()->role == "admin")
              <a href="/admin/welcome">Admin Panel</a>
              @endif
            </p>
            @endif
        </div>
        <div class="dropdown-overlay"></div>
        <form id="logoutform" method="POST" action="/logout">
            @csrf
        </form>
        </div>

  <!------------------ lesson us pdf --------------->  

    

    <div class="pdf">
        <iframe id="inlineFrameExample"
        title="Inline Frame Example"
        width="100%"
        height="100%"
        src="{{ asset('assets/pdf/1.pdf') }}">
        </iframe>
    </div>

<!------------------ end of lesson us pdf ---------------> 

<script src={{ asset('assets/js/jquery-3.4.1.min.js') }}></script>

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

	
