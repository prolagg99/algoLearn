
<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, iitial-scale=1">
        <title> Contact</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-section">
                        <h1>Contactez nous</h1>
                        @if (Session::has('flash_message') )
                            <div class="contact-form-text">{{ \Session::get('flash_message') }}</div>
                        @endif
                        <form action="/contact" class="contact-form" method="post">
                            @csrf
                            <input type="text" name="nom" placeholder="Votre nom"  class="contact-form-text form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" value="{{ auth()->user()->name }}" required autofocus disabled>
                            
                            <input type="email" name="email" class="contact-form-text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ auth()->user()->email }}" required placeholder="Votre email" disabled> 
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: rgb(255, 204, 0);">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <input type="text" name="sujet" class="contact-form-text form-control{{ $errors->has('sujet') ? ' is-invalid' : '' }}" value="{{ old('sujet') }}" required placeholder="Votre Sujet" > 
                            <textarea name="message"  class="contact-form-text form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" value="{{ old('message') }}" required placeholder="Votre Message"  cols="30" rows="10" placeholder="Tapez votre message ici"></textarea> 
                            
                            <input type="submit" class="contact-form-btn" value="Envoyer">
                            <a href="/" type="submit" class="contact-form-btn back" style="float:left;">Anuulé</a>
                            
                        </form> 
                        
                     </div>
                </div>
            </div>
        </div>
     

    </body>
    </html>