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
        <li><a href="/about">about</a></li>
        <li><a href="/contact/create">contact</a></li>
        <li><a href="#">simulateur</a></li>
        </ul>
        <br/><br/>
        

        <div class="inputBox" style="color : blue">
            @if (Auth::guest())
                <p><a href="/login">Login</a></p>
            @else
          
            <p id="dropdown-opener"><a href="#">{{Auth::user()->name}}</a></p>
            <p class="dropdown-content">
              <a id="logoutButton" href="#">Logout</a>
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

  <!------------------ chapters and lessons --------------->  

  
    



  <div>

  @foreach ($chapters as $chapter) 
    <div style="clear:both;"></div>
    <!-- Chapter -->
    <a style="font-size:30px; display:block;" href="#" onclick="openDialog({{$chapter->id}})">  &#9776;{{$chapter->title}}</a>
 
    <!-- overlay -->
    <div class="overlay" id="chap{{$chapter->id}}">
      <a href="javascript:void(0)" class="closebtn" onclick="closeDialog({{$chapter->id}})">&times;</a>
      <div class="overlay-content">
        @foreach ($chapter->lessons as $lesson)
          <a href="/cour/{{$lesson->id}}"> {{$lesson->title}} </a>
        @endforeach
      </div>
    </div>
    @endforeach

</div>

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


</body>
</html>

	
