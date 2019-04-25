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
  <div>
      <?php $x=1; ?>
      @foreach ($chapters as $chapter)
      <div class="s">
        <a href="#">
          <?php $ch=$chapter->id ?>
          <span style="font-size:30px;cursor:pointer" data-this-is-wild="{{$ch}}" onclick="openNav1(this.dataset.thisIsWild)">&#9776;Ch{{ $x++ }} {{$chapter->title}}</span>
        </a> 
      </div>

      <div id="myNav1" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
          <div class="overlay-content">
              <?php $somevar = $_GET["one"]; ?>
              @foreach ($chapter->lessons as $item)
                @if ($somevar == $item['chapter_id'])
                  <a href="#">{{ $item->title }}</a> 
                @endif
              @endforeach
          </div>
        </div>  
      @endforeach
  </div>
  
<!------------------ end of chapters and lessons ---------------> 

<!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>
function openNav1(obj) {
  var one = obj.getAttribute(data-this-is-wild);
  document.getElementById("myNav1").style.height = "100%";
}

function closeNav1() {
  document.getElementById("myNav1").style.height = "0%";
}

</script>
</div>


</body>
</html>

	
