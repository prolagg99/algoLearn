<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href={{ asset('assets/QCM1style.css') }}>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<title> QCM du cour1</title>
</head>
<body>
	<div class="l">
	<div id='d8'><a href="Interface.html"><img src="{{ url('/') }}/assets/images/5695.png" width="120px" height="100px" /></a>
    </div>
			  <div id="d1"> <h3 style="color: #6d0800;">{{ $chapter->title }} >></h3>  <h4 style="color: #0a3d62;">{{ $lesson->title }}  </h4></div>

			  <div class="p3"><a href="Cours1.html"><ul ><li class="prov"><span></span> </li></ul></a></div>
      </div>
		
<div class="page">
 <div class="retour">	<li ><span></span> </li></div>

   <div class="p1">
			<h3 style="float: left; margin-left: 380px; font-size: 36px; margin-top:-5px;color: rgba(255,255,255,1); font-family: sans-serif;"> QCM </h3>
				
			<i class='fas fa-question' style='font-size:36px; color:rgba(255,255,255,1); float: right; margin-right:450px; margin-top: -5px; '></i>
							
		<div class="p2">
			<br>
			<div class="check">
				<ul>
					<li>
						<label>
							<input type="checkbox" name="">
							<div class="icon-box" >
								<a href="#"><i class="fa fa-check" aria-hidden="true" ></i></a>
							</div>
						</label>
					</li>
				</ul>
			</div>
			
			<?php $x=1 ?>
				@foreach ($quiz->quiz_qsts as $item)
					<h2 style="margin-left: 50px;">Qst {{$x}}: {{$item->question}} </h2>
					<div class="Qst">
						<ul>
							<!--
							<li><label><input type="checkbox" name=""> I agree 1.</label></li>
							<li><label><input type="checkbox" name=""> I agree 2.</label></li>
							<li><label><input type="checkbox" name=""> I agree 3.</label></li>
							-->	
						</ul>
					</div>
					<?php $x++ ?>	
				@endforeach
				
		</div>

</body>
</html>

