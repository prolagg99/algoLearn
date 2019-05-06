<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

   @if ($x > 5)
        you are success
            {!! $x !!}
   @elseif($x <5)
        you are faild
        {!! $x !!}
   @endif

</body>
</html>