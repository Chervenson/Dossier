
<html>
     <head>
      <title>TD4</title>

<link rel="stylesheet" type="text/css" href="mes_styles.css">
     </head>

     <body>


  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Inscription</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
             
              <form id="stripe-login" action="inscription2.php" method="POST">
                <div class="field padding-bottom--24">
                  <label for="Login">Login</label>
                  <input type="Login" name="Login">
                </div>
                 <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                    
                  </div>
                  <input type="password" name="password">
                </div>


                 <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="Repeter">Repeter le mot de passe</label>
                    
                  </div>
                  <input type="password" name="Repeter">
                </div>
                   

                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="Nom">Nom</label>
                    
                  </div>
                  <input type="Nom" name="Nom">
                </div>

                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="Prenom">Prenom</label>
                    
                  </div>
                  <input type="Prenom" name="Prenom">
                </div>
  
                 <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="email">email</label>
                    
                  </div>
                  <input type="email" name="email">
                </div>

                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="dateNaissance">date de naissance</label>
                    
                  </div>
                  <input type="date" name="dateNaissance">
                </div>
                  
                   Sexe : <br> Homme <input class="fadeIn second" type="radio" id="Sexe" name="Sexe" value="1"> Femme <input class="fadeIn second" type="radio" id="Sexe" name="Sexe" value="2"><br><br>

Année du bac:
<select name="Anne_BAC" id="Anne_BAC">
  <option  value="0">Selectionner une date </option>
<?php 

for ($i = 1900; $i <= date("Y"); $i++) {
    echo "<option  value=$i>$i </option>";
}  
?>



        <center>       <div class="field padding-bottom--24">
                 <input type="submit" name="submit" value="S'inscrire">   
                </div>
               </center> 
              </form>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>



















      </body>









</html>
