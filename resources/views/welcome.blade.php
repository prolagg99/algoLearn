<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ALGOlearn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="com-md-12">
                        <div class="jumbotron" style="margin-top:50px;">
                                <h1>ALGOlearn</h1>
                                <p>...</p>
                                <p><a class="btn btn-primary btn-lg" href="/admin/1/chapters/create/" role="button">New Chapter</a></p>
                            </div>
                    </div>
                </div>

                <?php $x=1; ?>
                @foreach ($chapters as $chapter)
                <div class="row">
                    <div class="col-md-12">
                        <h3>Chapter{{ $x++ }}: {{$chapter->title}} </h3>   
                        <p style="display: inline;"><a class="btn btn-primary btn-lg" href="/admin/1/{{$chapter->id}}/lessons" role="button">Lessons</a></p> 
                        <div class="delete-edit" style="float: right;" >
                            <div style="display: inline-block;">
                                <a class="btn btn-success btn-lg" href="/admin/chapters/{{$chapter->id}}/edit" role="button">Edit</a>
                            </div>
                            <div style="display: inline-block;">
                                <form action="/admin/chapters/{{$chapter->id}}/delete" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                

        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
