<!DOCTYPE html>
<html>
<head>
	<meta keywords="html,learn,teach"/>
	<link rel="stylesheet" type="text/css" href="assets/choisirnvmdpstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<title> réinitialiser le mot de passe </title>
</head>
<body>
	<div id="d">
		<div class="box">
            <h2>Choisissez un nouveau mot de pass</h2>
            <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="inputBox">
                    <input id="" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label> Enter votre email </label>
                </div>

                <div class="inputBox">
                    <input id="" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <label> Enter un nouveau mot de passe </label>
                </div>

                <div class="inputBox">
                    <input id="" type="password" class="form-control" name="password_confirmation" required>
                    <label> confirmer le nouveau mot de passe</label>
                </div>
                    
                    
                <input type="submit" name="" value="Continue">
            </form>
        </div>
    </div>
</body>
</html>


