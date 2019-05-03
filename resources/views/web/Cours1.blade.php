<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href={{ asset('assets/Cours1style.css') }}>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


	<title> Cour01</title>
</head>
<body>
	
		<div class="l">
      <div id='d8'>
        <a href="/"><img src="{{ url('/') }}/assets/images/5695.png" width="120px" height="100px" /></a>
      </div>
      <div id="d1">

        
        <?php $x=1; $y=1; ?>
        @foreach ($chapters as $item)
          @if ($item['id'] == request()->route('chapter_id'))
            <h3 style="color: #6d0800;">Chap{{ $x }} >></h3> 
            @foreach ($item->lessons as $lesson)
              @if ($lesson['id'] == request()->route('lesson_id'))
                <h4 style="color: #0a3d62;">Cour{{ $y }} : {{ $lesson->title }} </h4>
              @endif
              <?php $y++ ?>
            @endforeach 
          @endif 
          <?php $x++ ?>
        @endforeach

      </div>
      <div class="p3"><a href="/chapitres"><ul ><li class="prov"><span></span> </li></ul></a></div>
    </div>
		
<div class="page">
 <div class="retour">	<li ><span></span> </li></div>

   <div class="p1">
     <!-- générale 
    <ul>
	<li class="prev"><span></span> </li>
	<li class="next"><span></span> </li>
	</ul>
-->
    
	

	 <div class="p2">  
     <div style="margin-left: 80px; " class="right" onclick="openCity(event, 'partie1') "></div>
     <div style="margin-left: 120px;" class="right" onclick="openCity(event, 'partie2')"></div>
     <div style="margin-left: 120px;" class="right" onclick="openCity(event, 'partie3')"></div>
     <div style="margin-left: 130px;" class="right" onclick="openCity(event, 'partie4')"></div>
 </div>
 <div id='question'>
                <a href="QCM1.html"> <i class='fas fa-question' style='font-size:36px; color:rgba(255,255,255,1); float: right; margin-right:40px; margin-top: -42px;'></i>
                </a>
</div>


        <div  id="partie1" class="tabcontent"  > 
                  <h3 >Page 1</h3> 
         kugyftyufgiluguiguiguigkjhgfxdwxyfuiopk^mljbvggdxtsrdgiuhlnjb vnxhftutiohliknvgcjhduttiohljb;, cjgfgulhjb; gcjy jgugb jgoiugihub jkguygjgub gi_huugii hguiggu hguihuihih
         
                  <ul>
                        <li class="prev" onclick="openCity(event, 'partie1')"><span></span> </li>
                        <li class="next" onclick="openCity(event, 'partie2')"><span></span> </li>
                  </ul>
        </div>



         <div id="partie2" class="tabcontent"  style="display: none"> <h3>Page 2</h3>
          gtttttttttttt
          
                   <ul>
                         <li class="prev" onclick="openCity(event, 'partie1')" ><span></span> </li>
                          <li class="next" onclick="openCity(event, 'partie3')" ><span></span> </li>
                  </ul>
         </div>
     
 
       <div id="partie3" class="tabcontent"  style="display: none"> <h3>Page 3</h3>
        hhhhhhhhhhhhh
       
                  <ul>
                         <li class="prev" onclick="openCity(event, 'partie2')"><span></span> </li>
                          <li class="next" onclick="openCity(event, 'partie4')"><span></span> </li>
                  </ul>
      </div>      


    <div id="partie4" class="tabcontent"  style="display: none"> <h3>Page 4</h3>
      ggggggggg
     
              <ul>
                         <li class="prev" onclick="openCity(event, 'partie3')"><span></span> </li>
                          <li class="next" onclick="openCity(event, 'partie4')"><span></span> </li>
                  </ul>    
    </div>

      <script >
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


      </script>
     	</div>
      
    </div>
   
</body>
</html>