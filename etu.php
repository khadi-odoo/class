<?php


class Etudiant

{
    protected $nom;
    protected $prenom;
    protected $matricule;
    private $dateNaiss;
    //public $cours = "Je fais cours de poo";
    //public $evaluation = "Je dois faire une évaluation le 30/10/2023";

    public function __construct($nom, $prenom, $matricule, $dateNaiss)
    {
        $this->nom = $nom;
        $this->prenom  = $prenom;
        $this->matricule = $matricule;
        $this->dateNaiss = $dateNaiss;
        //$this->cours = $cours;
        //$this->evaluation = $evaluation;

    }

    public function setNom($nom)
    {

        if (is_string($nom) && strlen($nom) > 0 && strlen($nom) > 0) {

            $this->nom = $nom;
        } else {
            throw new Exception('Entrez une chaine de caractère pour le nom');
        }
    }


    public function setPrenom($prenom)
    {

        if (is_string($prenom) && strlen($prenom) > 0 && strlen($prenom) < 25) {

            $this->prenom = $prenom;
        } else {
            throw new Exception('Entrez une chaine de caractère pour le prénom');
        }
    }


    public function getDateNaiss($dateNaiss)
    {

        return $this->dateNaiss = $dateNaiss;
    }
    // public function setDateNaiss($dateNaiss)
    // {

    //     if (DateTime::createFromFormat($dateNaiss)) {

    //         $this->dateNaiss = $dateNaiss;
    //     } else {
    //         throw new Exception('La date est incorrecte');
    //     }
    // }


    public function Presenter()
    {
        echo "Bonjour, je suis étudiante, je m'appelle $this->nom $this->prenom, mon matricule c'est $this->matricule, je suis née le $this->dateNaiss. <br><br>";
    }



    public function FaireCours()
    {
    }


    public function FaireEvaluation()
    {
    }
}

$etudiant = new Etudiant("Fatima", "NIASS", "477", "15/07/2003");
$etudiant->Presenter();




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
