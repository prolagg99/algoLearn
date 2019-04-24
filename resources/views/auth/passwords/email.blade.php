<!DOCTYPE html>
<html>
<head>
	<meta keywords="html,learn,teach"/>
	<link rel="stylesheet" type="text/css" href={{ asset('css/mdpoublierstyle.css') }}>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
	<title> Mot de passe oublier </title>
</head>
<body>
	<div id="d">
		<div class="box">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h2>Mot de passe oublier</h2>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="inputBox">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: rgb(255, 204, 0);">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label> Entrez votre adress e_mail pour recevoir un code de sécurité</label>
                </div>      
                <a href=""><input type="submit" name="" value="Envoyer"></a>
                <div class="inputBox">
                    <p><a href="/login1">Retour</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
