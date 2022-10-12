<?php
if ( isset ($_POST["bouton"]))
{
       $email = $_POST['email'];
       $Objet = $_POST['Objet'];
       $message = $_POST['message'];

   echo "email : $email <br> Objet : $Objet <br> message : $message <br>";
   if (mail('rivearmand@gmail.com',$Objet,$message))


   {
   echo "<br><br> Votre email a bien été envoyé.";
   }

      else
       { 
         echo "<br><br> Erreur envoie email";
       }



}

   else
{
echo "erreur";
}


?>
