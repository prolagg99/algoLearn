<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/style1.css">
        <link rel="stylesheet" href="assets/css/all.css">
    
        <title> Acceuil </title>
    </head>
    <body>
    <div id="d">
        
    
        <div id="d1">
            
      
          
        </div >
        <div id="d2">
    
    
        <div id="d2_1">
      
        </div>
       <div class=l>
      
        <div id='d8'><img src="assets/images/5695.png" width="120" height="100" />
        </div>
    
    
            <ul>
    
            <li><a href="/">Acceuil</a></li>
            <li><a href="/chapitres">Cours</a></li>
            <li><a href="/about">À propos de</a></li>
            <li><a href="/contact/create">contact</a></li>
            <li><a href="{{ asset('assets/algobox/algoboxwin64usb.zip') }}">simulateur</a></li>
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
    <!--<div class="hl">-->
        <div class="lm">
       <div class="text">
             <h4> Cours • EXERCICES • EVALUATION </h4>
                <h1 style=" font-size:62px;"> Etudier & Pratiquer</h1> <h1> L'algorithmique </h1>
                <h3> Prenez vos premier pas en algorithmique </h3>
                <!--<button id="buttonone"> like share </button>
                <button id="buttontwo"> Subscribe </button> -->
                 <div class="btn">  
     <div class="btn1"><a href="/register">S'inscrire</a></div>
     <div class="btn2"><a href="/login">S'identifier</a></div>
     <div class="btn3"><a href="/chapitres">Commencer </a></div>
      </div>
            </div>
    </div>
            
        </div>
    
    
    </div>
    </div>
    <div class="footer">
       <h3>ALGOLearn.com</h3>
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