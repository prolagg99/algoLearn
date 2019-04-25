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

        <li><a href="/">Acceuil</a></li>
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
   
  <!------------------ chapters and lessons --------------->  

  
    




  @foreach ($chapters as $chapter) 

    <!-- Chapter -->
    <div><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openDialog({{$chapter->id}})">&#9776;{{$chapter->title}}</span></a></div>
 
    <!-- overlay -->
    <div class="overlay" id="chap{{$chapter->id}}">
      <a href="javascript:void(0)" class="closebtn" onclick="closeDialog({{$chapter->id}})">&times;</a>
      <div class="overlay-content">
        @foreach ($chapter->lessons as $lesson)
          <a href="#"> {{$lesson->title}} </a>
        @endforeach
      </div>
    </div>
    @endforeach

<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->

<script>
  function openDialog(chapterID) {
    var divID = "chap" + chapterID;
    $('#'+divID).fadeIn();
  }

  function closeDialog(chapterID) {
    var divID = "chap" + chapterID;
    $('#'+divID).fadeOut();
  }
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
<!------------------ end of chapters and lessons ---------------> 

<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>

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
</div>


</body>
</html>

	
