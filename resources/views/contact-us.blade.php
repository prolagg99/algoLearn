<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/style1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
        <title> Home </title>
    </head>
    <body>
    <div id="d">
        
    
        <div id="d1">
            
      
          
        </div >
        <div id="d2">
    
    
        <div id="d2_1">
      
        </div>
       <div class=l>
      
        <div id='d8'><img src="assets/images/5695.png" width="120" height="100" />
        </div>
    
    
            <ul>
    
            <li><a href="/">Acceuil</a></li>
            <li><a href="/chapitres">Chapitres</a></li>
            <li><a href="#">about</a></li>
            <li><a href="/contact">contact</a></li>
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
    </div>-->
    <!--<div class="hl">-->
        <div class="container">
            <div class="row">
                <div class="col-md-10 contact-us">
                    <h1>Contactez nous</h1>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control" > 
                        </div>

                        <div class="form-group">
                            <label name="subject">Sujet:</label>
                            <input id="subject" name="subject" class="form-control" > 
                        </div>

                        <div class="form-group">
                            <label name="email">Message:</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10">Tapez votre message ici</textarea> 
                        </div>

                        <input type="submit" value="Envoyer" class="btn btn-success"> 
                    </form>
                </div>
            </div>
        </div>

 
    <!-- ------------------>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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