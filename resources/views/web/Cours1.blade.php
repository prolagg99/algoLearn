<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{ asset('assets/Cours1style.css') }}>
<link rel="stylesheet" href={{ asset('assets/css/all.css') }}>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<title> Cours </title>

</head>
<body>
	
		<div class="l">
      <div id='d8'>
        <a href="/"><img src="{{ url('/') }}/assets/images/5695.png" width="120px" height="100px" /></a>
      </div>
       <!-- simulateur -->     <div class="inputBox" style="color : blue"><p><a href="#">Simulateur</a></p></div> 
      <div id="d1">

        
            <h3 style="color: #6d0800;">{{ $chapter->title }} >></h3> 
            <h4 style="color: #0a3d62;">{{ $lesson->title }} </h4>

      </div>
      <div class="p3"><a href="/chapitres"><ul ><li class="prov"><span></span> </li></ul></a></div>
    </div>
		
  <div class="page">
    <div class="retour">	<li ><span></span> </li></div>

    <div class="p1">
      <div class="block-div" id="block-div"></div>
      <div class="BoxResult" id="myModel">
        <div class="content">
            <div class="result">
                <p>Tu n'as pas lu la leçon précédente</p>
            </div>
            @if ($progress == null && request()->route('id') != $firstId)
              <a href="/cour/{{$firstId}}"><button type="button" style="background-color: #f44336;"><i class="fas fa-arrow-left"></i> <span class="font-size: 16px;">Leçon précédente</span> </button></a>
            @else
              <a href="/cour/{{$lastLesson}}"><button type="button" style="background-color: #f44336;"><i class="fas fa-arrow-left"></i> <span class="font-size: 16px;">Leçon précédente</span> </button></a>
            @endif
        </div>
      </div>
  
      <div class="p2">  
          <div id="openp1" style="margin-left: 80px;" class="right none" onclick="openCity(event, 'partie1') "></div>
          <div id="openp2" style="margin-left: 120px;" class="right none" onclick="openCity(event, 'partie2')"></div>
          <div id="openp3" style="margin-left: 120px;" class="right none" onclick="openCity(event, 'partie3')"></div>
          <div id="openp4" style="margin-left: 130px;" class="right none" onclick="openCity(event, 'partie4')"></div>
          <div id="openp5" style="margin-left: 130px;" class="right none" onclick="openCity(event, 'partie5')"></div>
        </div>
  
  
        <div id="question">
          <a href="/cour/{{request()->route('lesson_id')}}/Quiz/Qsts"> <i class='fas fa-question' style='font-size:36px; color:rgba(255,255,255,1); float: right; margin-right:40px; margin-top: -42px;'></i>
          </a>
        </div>
  
        <div  id="partie1" class="tabcontent"  > 
         
          <div style="height: auto; min-height: 189px;">
          </div>
         
          
          <ul>
                <li class="prev" onclick="openCity(event, 'partie1')"><span></span> </li>
                <li class="next" onclick="openCity(event, 'partie2')"><span></span> </li>
          </ul>
        </div>
  
        <div id="partie2" class="tabcontent"  style="display: none"> 
          <div style="height: auto; min-height: 189px;">
          </div>
            <ul>
              <li class="prev" onclick="openCity(event, 'partie1')" ><span></span> </li>
              <li class="next" onclick="openCity(event, 'partie3')" ><span></span> </li>
            </ul>
        </div>
      
        <div id="partie3" class="tabcontent"  style="display: none"> 
          <div style="height: auto; min-height: 189px;">
          </div>
    
          <ul>
            <li class="prev" onclick="openCity(event, 'partie2')"><span></span> </li>
            <li class="next" onclick="openCity(event, 'partie4')"><span></span> </li>
          </ul>
        </div> 
            
  
  
        <div id="partie4" class="tabcontent"  style="display: none"> 
          <div style="height: auto; min-height: 189px;">
          </div>
          
          <ul>
            <li class="prev" onclick="openCity(event, 'partie3')"><span></span> </li>
            <li class="next" onclick="openCity(event, 'partie5')"><span></span> </li>
          </ul>    
        </div>
  
        <div id="partie5" class="tabcontent"  style="display: none"> 
          <div style="height: auto; min-height: 189px;">
          </div>
  
          <ul>
              <li class="prev" onclick="openCity(event, 'partie4')"><span></span> </li>
              <li class="next" onclick="openCity(event, 'partie4')"><span></span> </li>
          </ul>    
        </div>
 

      <script >
        var lessons_text ="<?php echo preg_replace("/[\r\n]*/","",addslashes($lesson->details)); ?>";
       // addslashes($lesson->details);
       // lessons_text = "Content1 @@@ Content2 @@@ Content3 @@@";
        var count = (lessons_text.match(/@@@/g) || []).length;
        var startQuiz = '<li class="next" onclick="openCity(event, \'partie4\')"><span></span> </li>';
        console.log(substring);
        if (count != 0 ){
          for (var x = 1; x <= count; x++){
            document.getElementById('openp'+x).style.display = "block";
            var substring = lessons_text.substr(0, lessons_text.indexOf("@@@")); 
            document.getElementById("partie"+x).getElementsByTagName("div")[0].innerHTML = substring;
            lessons_text = lessons_text.replace(substring + "@@@", "");
            if ( x  == count){

              console.log(document.getElementById("partie"+x).getElementsByClassName("next")[0]);
              document.getElementById("partie"+x).getElementsByClassName("next")[0].setAttribute("onclick", "openQuizPage()");
            }
          } 
        } else {
          document.getElementById('openp1').style.display = "block";
          document.getElementById("partie1").getElementsByTagName("div")[0].innerHTML = lessons_text;
          document.getElementById("partie1").getElementsByTagName("ul")[0].style.display = "none";

        }
        console.log("test", count);
        //split content to 5 sections 

        //
        function openQuizPage(){
          window.location.href = '/cour/{{$lesson->id}}/Quiz/Qsts';
        }
        function openCity(evt, cityName) {
          var i, tabcontent, right;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
           }
         right = document.getElementsByClassName("right");
         for (i = 0; i < right.length; i++) {
          right[i].className = right[i].className.replace(" active", "");}
        document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
             }
           
        
          @if($progress == null|| $progress['is_done'] == 0) 
            @if ($prevID != null)
              var myModal = document.getElementById('myModel').style.display = 'block';
              var blockDiv = document.getElementById('block-div').style.display = 'block';
            @endif  
          @endif   

      </script>
      
      <div class="center"> 
        <a href="/cour/pdf/{{$lesson->id}}"><span></span>Cour Complet</a>
      </div>
      <?php 
        $v= $video[request()->route('lesson_id')]; 
      ?>
      <div class="center1"> 
        <a href="{{$v}}"><span></span>sous forme video</a>
      </div>   
  
    </div>    
  </div>
   
</body>
</html>