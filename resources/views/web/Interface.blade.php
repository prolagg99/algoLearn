<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<title> Home </title>
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

    	<li><a href="/accueil">Acceuil</a></li>
    	<li><a href="/chapitres">Chapitres</a></li>
    	<li><a href="#">about</a></li>
    	<li><a href="#">contact</a></li>
    	<li><a href="#">simulateur</a></li>
        </ul>
        <br/><br/>
        
        <div class="inputBox" style="color : blue">

            @if (Auth::guest())
                <p><a href="/login1">Login</a></p>
            @else
            <p id="dropdown-opener"><a href="#">{{Auth::user()->name}}</a></p>
            <p class="dropdown-content"><a id="logoutButton" href="#">Logout</a></p>
            @endif
        
        </div>
<div class="dropdown-overlay"></div>
<form id="logoutform" method="POST" action="/logout">
    @csrf
</form>



   



</div>-->
<!--<div class="hl">-->
    <div class="lm">
   <div class="text">
         <h4> Cours • EXERCICES • EVALUATION </h4>
            <h1> Etudier & Pratiquer </h1>
            <h3> Prenez vos premier pas en algorithmique </h3>
            <!--<button id="buttonone"> like share </button>
            <button id="buttontwo"> Subscribe </button> -->
             <div class="btn">  
 <div class="btn1"><a href="/inscription">inscrer</a></div>
 <div class="btn2"><a href="/login1">Login</a></div>
 <div class="btn3"><a href="/chapitres">Start </a></div>
  </div>
        </div>
</div>
    	
    </div>


</div>
</div>
<div class="footer">
   <h3>ALGOLearn.com</h3>
</div>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" crossorigin="anonymous"></script>
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