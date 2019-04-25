

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
                <input type="" name="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                
                @if ($errors->has('full_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: rgb(255, 204, 0);">{{ $errors->first('full_name') }}</strong>
                    </span>
                @endif
                <label> Nom/prénom</label>
                </div>

                <div class="inputBox">
                    <input type="" name="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                    
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
                                <input type="radio" name="" required="">femme 
                                <input type="radio" name="" required="">homme 
                            </td>
                        </tr>
                    </div>
                </div>
            <br><br><br>
                
                <div class="inputBox">
                    <span class = "d1">Date de naiss:</span>
                    <?php $x=1; ?>
                    <select name="Jours">
                            <option value="Jour">Jour</option>
                            @for ($i = 0; $i < 31; $i++)
                            <option value="1">{{ $x }}</option>
                            {{ $x++ }}
                            @endfor
                    </select>

                    <select name="Mois">
                        <option value="Mois">Mois</option>
                        <option value="Janvier">Janvier</option>
                        <option value="Février">Février</option>
                        <option value="Janvier">Mars</option>
                        <option value="Février">Avril</option>
                        <option value="Janvier">Mai</option>
                        <option value="Février">Juin</option>
                        <option value="Janvier">Juillet</option>
                        <option value="Février">Aout</option>
                        <option value="Janvier">Septembre</option>
                        <option value="Février">Octobre</option>
                        <option value="Janvier">Sevombre</option>
                        <option value="Février">Décembre</option>
                    </select>

                    <select name="années">
                        <option value="Année">Année</option>
                        <option value="2002">2007</option>
                        <option value="2001">2006</option>
                        <option value="2000">2005</option>
                        <option value="1999">2004</option>
                        <option value="1998">2003</option>
                        <option value="1997">2002</option>
                        <option value="2002">2001</option>
                        <option value="2001">2000</option>
                        <option value="2000">1999</option>
                        <option value="1999">1998</option>
                        <option value="1998">1997</option>
                        <option value="1997">1996</option>
                        <option value="2002">1995</option>
                        <option value="2001">1994</option>
                        <option value="2000">1993</option>
                        <option value="1999">1992</option>
                        <option value="1998">1991</option>
                        <option value="1997">1990</option>
                        <option value="2002">1989</option>
                        <option value="2001">1988</option>
                        <option value="2000">1987</option>
                        <option value="1999">1986</option>
                        <option value="1998">1985</option>
                        <option value="1997">1984</option>
                    </select>
                
                </div>
                    <br>
                    <div class="inputBox" >
                        <input type="" name="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color: rgb(255, 204, 0);">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label> email </label>
                    </div>
                
                
                <div class="inputBox" >
                    <input type="password" name="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    
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
