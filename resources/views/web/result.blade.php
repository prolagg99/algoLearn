<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href={{ asset('assets/QCM1style.css') }}> 
    <title>Document</title>
</head>
<body>

        <button id="myBtn">Open Modal</button>

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