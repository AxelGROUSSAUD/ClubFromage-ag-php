<?php
require 'Autoloader.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use Club_Fromage\{

    Model\Buisness\Avis,
    Model\Buisness\Fromage,
    Model\Buisness\Membre,
    Model\Buisness\Pays
};
use Club_Fromage\Autoloader;
//require __DIR__ . '/vendor/autoload.php';

//$log = new Monolog\Logger('name');
//$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//$log->warning("Foo");
Autoloader::register();

$tabAvis = array (
    "idMembre" =>1,
    "idFromage"=>5,
    "avis"=>"bof",
    "note"=>1
);

$tabPays =array(
    "idPays" => 12,
    "nom" => "France"
);

$Paystest = new Pays($tabPays);

$tabFromage = array(
    "id" => 3,
    "name"=>"Reblochon",
    "origin" => $Paystest,

    "dateCreation" => '1900-06-02',
    "image" => "uneImage",
    "dureeAffinage" => '01-00-00',
    "recette" => "dknhfuiehgrezyègfryegtry",
    "histoire" => "fjenuizehfuizhyklsndciqsohfuihofgry"
);



$tabMembre = array(
    "id" => 9,
    "nomUtilisateur" => "GROUSSAUD",
    "pseudo" => "agroussaud",
    "email" => "axel.groussaud@saintmichelannecy.fr",
    "motDePasse" => "********",
    "dateDerConnexion" => '2020-09-23',
    "dateEntreeClub" => '2020-08-18',
    "description" => "nqdjkbfiqegbegfeu"
);

//Tests hydratation
$avistest = new Avis($tabAvis);
echo $avistest->getIdMembre()." ".$avistest->getIdFromage()." ".$avistest->getAvis()." ".$avistest->getNote()."<br>";




echo $Paystest->getIdPays()." ".$Paystest->getNom()."<br>";

$Membretest = new Membre($tabMembre);
echo $Membretest->getId()." ".$Membretest->getNomUtilisateur()." ".$Membretest->getPseudo()." ".$Membretest->getEmail()." ".$Membretest->getMotDePasse()." ".$Membretest->getDateDerConnexion()." ".$Membretest->getDateEntreeClub()." ".$Membretest->getDescription()."<br>";

$fromagetest = new Fromage($tabFromage);
echo $fromagetest->getId()." ".$fromagetest->getName()." ".$fromagetest->getOrigin()->getNom()." ".$fromagetest->getDureeAffinage()." ".$fromagetest->getDateCreation()." ".$fromagetest->getImage()." ".$fromagetest->getRecette()." ".$fromagetest->getHistoire()."<br>";
//var_dump($fromagetest);

//echo json_encode($tabMembre, JSON_PRETTY_PRINT);
//echo $Membretest->jsonSerialize();
var_dump($Membretest->jsonParse($Membretest->jsonSerialize()));
echo $Membretest->jsonParse($Membretest->jsonSerialize())->Id;
