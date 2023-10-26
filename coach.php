
<?php

require 'etu.php';
class Proffesseur extends Etudiant

{
    private $salaire;
    private $voiture;
    private $specialite;
    public function __construct($nom, $prenom, $matricule, $dateNaiss, $salaire, $voiture, $specialite)
    {
        $this->salaire = $salaire;
        $this->voiture = $voiture;
        $this->specialite = $specialite;
        parent::__construct($nom, $prenom, $matricule, $dateNaiss);
    }
    public function Presenter()
    {


        echo "Salut, je suis professeur, $this->nom $this->prenom, mon matricule c'est $this->matricule, J'ai un salaire de $this->salaire, Avez-vous une voiture ? $this->voiture. Je suis $this->specialite";
    }
    public function getSalaire()
    {
        return $this->salaire;
    }

    public function getVoiture()
    {

        return $this->voiture;
    }
}



$professeur = new Proffesseur("Kane", "Samba", "232343", "00/00/0000", 500000, "OUI", "DEVOPS");

$professeur->Presenter();


?>
