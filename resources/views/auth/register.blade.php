

<!DOCTYPE html>
<html>
<head>
  <meta keywords="html,learn,teach"/>
  <link rel="stylesheet" type="text/css" href="assets/Inscriptionstyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <title> Inscription  </title>
</head>
<body>
    <div id="d">
        <div class="box">
            <h2>Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="inputBox">
                <input type="text" name="full_name" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" value="{{ old('full_name') }}" required autofocus>
                
                @if ($errors->has('full_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: rgb(255, 204, 0);">{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif
                <label> Nom/prénom</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required>
                    
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: rgb(255, 204, 0);">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <label> Nom d utilisateur</label>
                </div>

                <div class="d3">
                    <div class="d2">
                        <tr>
                            <td>Sexe:   </td>
                            <td>
                              
                                <input type="radio" name="sex" value="femme" required="" {{old('sex') == 'femme' ? 'checked' : '' }}>femme 
                                <input type="radio" name="sex" value="homme" required="" {{old('sex') == 'homme' ? 'checked' : '' }}>homme 
                            </td>
                        </tr>
                        @if ($errors->has('sex'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: rgb(255, 204, 0);">{{ $errors->first('sex') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            <br><br><br>
                
                <div class="inputBox">
                    <span class = "d1">Date de naiss:</span>
                    <?php $x=1; ?>
                    <input name="birth_date" type="date" value="{{old('date')}}" />
                    @if ($errors->has('birth_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: rgb(255, 204, 0);">{{ $errors->first('birth_date') }}</strong>
                        </span>
                    @endif

                
                </div>
                    <br>
                    <div class="inputBox" >
                        <input type="" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: rgb(255, 204, 0);">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label> email </label>
                    </div>
                
                
                <div class="inputBox" >
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                    
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: rgb(255, 204, 0);">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <label> Mot de passe </label>
                </div>

                <div class="inputBox" >
                    <input type="password" name="password_confirmation" required>
                    <label> Confirmer le mot de passe </label>
                </div>

                <a href="http://"><input type="submit" name="" value="Envoyer"></a>
                <div class="inputBox">
                    <p><a href="{{ URL::previous() }}">Retour</a></p>
                </div>
            </form>
        </div>    
    </div>
</body>
</html>
