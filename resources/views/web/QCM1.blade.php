<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href={{ asset('assets/QCM1style.css') }}>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
<title> QCM du cour1</title>
</head>
<body>
	<div class="block-div" id="block-div"></div>
	@if (count($answers) > 0) 
			<div class="BoxResult" id="myModel">
					
				<div class="content">
					<div class="result">
						<?php $right_answer=0; ?>
							@foreach ($answers as $item)
									@if ($item['value'] == 'true')
											<?php $right_answer++; ?>
											<h3 style="color:#4CAF50;"><i class="fas fa-check"></i>Juste</h3>
									@else
											<h3 style="color:#f44336"><i class="fas fa-times"></i>Faux </h3> 
									@endif
							@endforeach
					</div>
					@if ($right_answer > 2)
					<p class="R-box">Réussit : Tu dépasse le min de score</p>
					<a href="/cour/{{$nextid}}"><button type="button" style="background-color: #4CAF50;">Suivant<i class="fas fa-arrow-right"></i></button></a>
					@elseif($right_answer < 3)
							<p class="R-box">Il faut avoir 50% de réponses Juste pour passé</p>
							<a href="/cour/{{request()->route('lesson_id')}}"><button type="button" style="background-color: #f44336;"> Réessayer <i class="fas fa-undo-alt"></i></button></a>
					@endif
				</div>
						
			</div>
			@endif
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

   <div class="p1" id="p1-box">
			<h3 style="float: left; margin-left: 380px; font-size: 36px; margin-top:-5px;color: rgba(255,255,255,1); font-family: sans-serif;"> QCM </h3>
				
			<i class='fas fa-question' style='font-size:36px; color:rgba(255,255,255,1); float: right; margin-right:450px; margin-top: -5px; '></i>
							
		<div class="p2">
			
				<form id="form1" action="/cour/{{$lesson->id}}/result" method="POST">
					@csrf
				<?php $x=1 ?>
				<br><br><br><br>
				@foreach ($quiz_qsts as $item)
					<h2 style="margin-left: 50px;">Exercice {{$x}}: {!! $item->question !!} </h2>
					<br>
					<?php 
						$option =$item->options;
						$single =	explode(',', $option);
						$nbr = count($single);
					?>
					
					<input type="hidden" id="a{{$item->id}}" name="selected[{{$item->id}}]" value="">

					@for ($i = 0; $i <$nbr; $i++)
						<div style="margin-left:100px;">
							<?php $value = $single[$i] ?>
							<input type="checkbox"  onchange="onChange(event,'chb'+{{$item->id}})" class="chb{{$item->id}}" value="{{$value}}" data-myid="{{$item->id}}">
							<label for="horns" style="margin-left:5px; margin-right:30px;">{{$single[$i]}}</label>
						</div>
					@endfor	
					
					<br><br><br>
					<?php $x++ ?>	
				@endforeach
				
				<div class="check" id="myBtn" onclick="submitForm()">
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
			</form>

			
		</div>

		<script src={{ asset('assets/js/jquery-3.4.1.min.js') }}></script>
		<script>

		function submitForm() {
			document.getElementById("form1").submit();
		}

		@if (count($answers) > 0)
			var myModal = document.getElementById('myModel').style.display = 'block';
			/*var btn = document.getElementById('myBtn').style.display = 'none'; */
			var blockDiv = document.getElementById('block-div').style.display = 'block';
			/** var box = document.getElementById('p1-box').style.paddingBottom= ''; **/
		@endif;

		function onChange(e,p1){
			console.log($(e.target).attr('data-myid'));
			$("."+p1).prop('checked', false);
			$(e.target).prop('checked', true);
			var id = "a" + $(e.target).attr('data-myid');
			var selectedValue = e.target.value;
			$("#"+id).val(selectedValue);
		}
		

		</script>
		
</body>
</html>

