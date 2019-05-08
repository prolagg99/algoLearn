<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href={{ asset('assets/QCM1style.css') }}>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
<title> QCM du cour1</title>
</head>
<body>
	<div class="l">
	<div id='d8'><a href="/chapitres"><img src="{{ url('/') }}/assets/images/5695.png" width="120px" height="100px" /></a>
    </div>
			  <div id="d1"> 
					<h3 style="color: #6d0800;">{{ $chapter->title }} >></h3> 
					<h4 style="color: #0a3d62;">{{ $lesson->title }}  </h4></div>

			  <div class="p3"><a href="/cour/{{$lesson->id}}"><ul ><li class="prov"><span></span> </li></ul></a></div>
      </div>
		
<div class="page">
 <div class="retour">	<li ><span></span> </li></div>

   <div class="p1">
			<h3 style="float: left; margin-left: 380px; font-size: 36px; margin-top:-5px;color: rgba(255,255,255,1); font-family: sans-serif;"> QCM </h3>
				
			<i class='fas fa-question' style='font-size:36px; color:rgba(255,255,255,1); float: right; margin-right:450px; margin-top: -5px; '></i>
							
		<div class="p2">
		
				<form id="form1" action="/cour/{{$lesson->id}}/result" method="POST">
					@csrf
				<?php $x=1 ?>
				<br><br><br><br>
				@foreach ($quiz_qsts as $item)
					<h2 style="margin-left: 50px;">Qst {{$x}}: {!! $item->question !!} </h2>
					<br>
					<?php 
						$option =$item->options;
						$single =	explode(',', $option);
						$nbr = count($single);
					?>
					@for ($i = 0; $i <$nbr; $i++)
						<div style="margin-left:100px;">
							<input type="checkbox" name= "selected[{{$item->id}}]" value={{$single[$i]}}>
							<label for="horns" style="margin-left:5px; margin-right:30px;">{{$single[$i]}}</label>
						</div>
					@endfor	

					<br>
					<?php $x++ ?>	
				@endforeach
				<div class="check">
						<ul>
							<li>
								<label>
									<input type="checkbox" name="">
									<div class="icon-box" >
											<a href="#" id="myBtn"><i class="fa fa-check" aria-hidden="true" ></i></a>
									</div>
								</label>
							</li>
						</ul>
					</div>
			</form>

						
			<div class="row">
					<div class="col-md-8">
							<div class="BoxResult" id="myModel">
									
									<div class="content">
											@if ($x > 5)
											<a href="#"><button type="button" style="background-color: #4CAF50;">Next<i class="fas fa-arrow-right"></i></button></a>
													{!! $x !!}
										 @elseif($x <5)
													<a href="/cour/{{request()->route('lesson_id')}}"><button type="button" style="background-color: #f44336;"> Try Again <i class="fas fa-undo-alt"></i></button></a>
													{!! $x !!}
										 @endif
										 
											
											<div class="result">
													@foreach ($answers as $item)
															@if ($item['value'] == 'true')
																	<h3 style="color:#4CAF50;"><i class="fas fa-check"></i>Correct</h3>
															@else
																	<h3 style="color:#f44336"><i class="fas fa-times"></i> Wrong</h3> 
															@endif
													@endforeach
											</div>
									</div>
									 
							</div>
					</div>
			</div>
			
			
		</div>

		<script>
        var box = document.getElementById("myModel");
        var btn = document.getElementById("myBtn");
        btn.onclick = function (){
            box.style.display = "block";
        }
            window.onclick = function(event) {
            if (event.target == box) {
                box.style.display = "block";
            }
        }
		</script>
		
</body>
</html>

