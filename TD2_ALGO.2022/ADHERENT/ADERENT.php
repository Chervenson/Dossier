<?php
class ADHERENT
{
 private $nom;
 private $prenom;
 private $numeroCarte;
 private $DateAdhesion;


public function __construct($unnom,$unprenom,$numeroCarte,$DateAdhesion)
{
 $this->nom=$unnom;
 $this ->prenom=$unprenom;
 $this ->numeroCarte=$numeroCarte;
 $this ->DateAdhesion=$DateAdhesion;
}

public function getnom()
{
 return $this->nom;

}
public function getprenom()
{
 return $this->prenom;

}
public function getnumeroCarte()
{
 return $this->numeroCarte;

}
public function getDateAdhesion()
{
 return $this->DateAdhesion;

}

public function SET__nom($unnom)
{
  $this->nom=$unnom;

}
public function SET__prenom($unprenom)
{
  $this->prenom=$unprenom;

}
public function SET__numeroCarte($unnumeroCarte)
{
  $this->numeroCarte=$unnumeroCarte;

}
public function SET__DateAdhesion($unDateAdhesion)
{
  $this->DateAdhesion=$unDateAdhesion;

}
}

$Adherent1=new ADHERENT("Bliotek","Billy",10001,10/9/2022);
$Adherent2=new ADHERENT("Hugo","Victor",10002,NULL);

$monDico = array();
$monDico["10001"] = $Adherent1;
$monDico["10002"] = $Adherent2;

echo "Liste des adhérent n'ayant pas de date d'adhesion : <br>";
foreach($monDico as $Lacle=>$unAdherent)
{
 if($unAdherent->getDateAdhesion()==NULL)
    {
     echo $unAdherent->getnom();
    }
}

echo "<br>";
if (isset($monDico["10003"]))
{
 echo "Le  numero 10003 existe";
}
else
{
 echo "Lenumero 10003 n'existe pas";
}



?>
