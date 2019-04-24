<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/chapitre1style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<title> Chapitre </title>
</head>
<body>
    <div id="d">
    <div class=l>
   <!--<div id='d8'><img src="contrat-picto-337x325.png" width="120px" height="100px" />
    </div>-->
    <div id='d8'><img src="assets/images/5695.png" width="120px" height="100px" />
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
   <!--<div class="Menu">Menu</div>

        <ul >


        <li><a href="#"><div class="icon"><div class="name">home</div></div></a></li>
        <li><a href="#"><div class="icon"><div class="name">cours</div></div></a></li>
        <li><a href="#"><div class="icon"><div class="name">about</div></div></a></li>
        <li><a href="#"><div class="icon"><div class="name">contact</div></div></a></li>
        <li><a href="#"><div class="icon"><div class="name">simulateur</div></div></a></li>
        </ul>
        <script
  src="https://code.jquery.com/jquery-3.4.0.js"
></script>
   <script type="text/javascript">
       $(document).ready(function(){
        $('.Menu').click(function(){
            $('ul').toggleClass('active')
        })
       })
   </script>
        <br/><br/>
        <div class="inputBox" style="color : white"><p><a href="#">Login</a></p>
      </div>-->
    

 

    


    
	<div id="myNav1" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
  <div class="overlay-content">
    <a href="#">Introduction</a>
    <a href="#">Les instructions de bases</a>
    <a href="#">Les boucles</a>
    <a href="#">Affectation</a>
    <a href="#">jckjdh</a>
    <a href="#">Ecrire</a>
    <a href="#">Affectation</a>

  </div>
</div>
<div id="myNav2" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <div class="overlay-content">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">7</a>

  </div>
</div>

      <form id="">

      </form>

<div class="s"><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav1()">&#9776;Ch01 tutoriel</span></a></div>
  <div class="s1"><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav2()">&#9776;Ch02 tutoriel</span></a></div>
  <div class="s2"><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Ch03 tutoriel</span></a></div>
  <div class="s3"><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;Ch04 tutoriel</span></a></div>
<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>
function openNav1() {
  document.getElementById("myNav1").style.height = "100%";
}

function closeNav1() {
  document.getElementById("myNav1").style.height = "0%";
}
function openNav2() {
  document.getElementById("myNav2").style.height = "100%";
}

function closeNav2() {
  document.getElementById("myNav2").style.height = "0%";
}
</script>
</div>


</body>
</html>