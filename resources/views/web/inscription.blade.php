
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
        
        <form>
            
            <div class="inputBox">
             <input type="" name="" required="">
             <label> Nom/prénom</label>
            </div>

            <div class="inputBox">
             <input type="" name="" required="">
             <label> Nom d utilisateur</label>
            </div>
            

            <div class="d3">
              <div class="d2">
              <tr>
              <td>Sexe:   </td>
              
             <td><input type="radio" name="" required="">femme 
            <input type="radio" name="" required="">homme 
          </td>
            </tr>
            </div>
          </div>
           <br><br><br>
            
            <div class="inputBox">
            <span class = "d1">Date de naiss:</span>
            
            <select name="Jours">
              <option value="Jour">Jour</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <select name="Mois">
              <option value="Mois">Mois</option>
              <option value="Janvier">Janvier</option>
              <option value="Février">Février</option>

              
            </select>
            <select name="années">
              <option value="Année">Année</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>

            </select>
           
            </div>
            <br>
            <div class="inputBox" >
                <input type="" name="" required="">
                <label> email </label>
            </div>
            
            
            <div class="inputBox" >
                <input type="password" name="" required="">
                <label> Mot de passe </label>
            </div>
            <div class="inputBox" >
                <input type="password" name="" required="">
                <label> Confirmer le mot de passe </label>
            </div>

      <input type="submit" name="" value="Envoyer">
      <!--<input type="button" name="" value="Retour">
      <button type="button" onclick="Interface.html">Retour</button>-->
      <div class="inputBox"><p><a href="{{ URL::previous() }}">Retour</a></p>
      </div>
 
 
  </form>
    




</div>
   
      
    </div>




</div>

<!-- 2 -->









</div>
</body>
</html>