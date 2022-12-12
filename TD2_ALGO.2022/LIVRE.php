<?php
class LIVRE {
     private $ISBN;
     private $Titre;
     private $Prix;
     private $Dispo;
     
     public function __construct($unISBN, $unTitre, $unPrix, $unDispo)
     {
      $this->ISBN = $unISBN;
      $this->Titre = $unTitre;
      $this->Prix = $unPrix;
      $this->Dispo = $unDispo;
     }
     public function getISBN()
     {
      return $this->ISBN;
     }
     public function getTitre()
     {
      return $this->Titre;
     }
     public function getPrix()
     {
      return $this->Prix;
     }
     public function getDispo()
     {
      return $this->Dispo;
     }

     public function set_ISBN($unISBN)
     {
      return $this->ISBN=$unISBN;
     }
     public function set_Titre($unTitre)
     {
      return $this->Titre=$unTitre;
     }
     public function set_Prix($unPrix)
     {
      return $this->Prix=$unPrix;
     }
     public function set_Dispo($unDispo)
     {
      return $this->Dispo=$unDispo;
     }

}

$livre1=new LIVRE("EEE032", "programmer en C", 10,0);
$livre2=new LIVRE("JAV44", "programmer en java", 50,0);

$monDico = array();
$monDico["EEE032"] = $livre1;
$monDico["JAV44"] = $livre2;

$monDico["EEE032"]->set_Dispo(1);

foreach($monDico as $ISBN=>$livre)
{
 echo $ISBN;
 echo $livre1->getTitre();
}

?>
