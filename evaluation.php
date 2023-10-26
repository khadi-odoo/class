<?php

class Evaluation
{

    private $nom_prof;
    private $prenom_prof;
    private $matricule;
    public $specialite;
    private $nom_eval;
    private $dateEval;
    private $duree;

    public function __construct($nom_prof, $prenom_prof, $matricule, $specialite, $nom_eval, $dateEval, $duree)
    {
        $this->nom_prof = $nom_prof;
        $this->prenom_prof = $prenom_prof;
        $this->matricule = $matricule;
        $this->specialite = $specialite;
        $this->nom_eval = $nom_eval;
        $this->dateEval = $dateEval;
        $this->duree = $duree;
    }

    public function getNom_prof($nom_prof)
    {

        return $this->nom_prof = $nom_prof;
    }

    public function setNom_prof($nom_prof)
    {

        if (is_string($nom_prof)) {
            $this->nom_prof = $nom_prof;
        } else {

            throw new Exception(' Entrez des uniquement des lettres pour le nom du coach');
        }
    }

    public function getPrenom_prof($prenom_prof)
    {
        return $this->prenom_prof = $prenom_prof;
    }

    public function setPrenom_prof($prenom_prof)
    {

        if (is_string($prenom_prof)) {
            $this->prenom_prof = $prenom_prof;
        } else {

            throw new Exception(' Entrez uniquement des lettres pour le prénom du coach');
        }
    }

    public function getMatricule($matricule)
    {

        return $this->matricule = $matricule;
    }
    public function setMatricule($matricule)
    {

        if (is_numeric($matricule) && ($matricule > 0)) {
            $this->matricule = $matricule;
        } else {

            throw new Exception(' Entrez un numéro matricule correct');
        }
    }

    public function getNom_eval($nom_eval)
    {

        return $this->nom_eval = $nom_eval;
    }

    public function setNom_eval($nom_eval)
    {
        if (is_string($nom_eval)) {
            $this->nom_eval = $nom_eval;
        } else {
            throw new Exception(' Entrez uniquement des lettres pour le nom de l\'évaluation');
        }
    }

    public function getDateEval($dateEval)
    {

        return $this->dateEval = $dateEval;
    }


    public function setDateEval($dateEval)
    {

        $date = new DateTime();

        $dateEval = $date->format('d/m/Y');

        if ($dateEval) {
            $this->dateEval = $dateEval;
        } else {
            throw new Exception(' Veuillez Entrez une date correcte');
        }
    }

    public function getDuree($duree)
    {

        $this->duree = $duree;
    }


    public function setDuree($duree)
    {
        if (is_numeric($duree) && ($duree > 0)) {
            $this->duree = $duree;
        } else {
            throw new Exception(' La durée doit être positif !!!!');
        }
    }

    public function evaluate()
    {

        echo "Salam je suis coach $this->nom_prof $this->prenom_prof. Mon matricule c'est $this->matricule.  Mon spécialité c'est $this->specialite. 
        Je fais une évaluation de $this->nom_eval le $this->dateEval et la durée c'est $this->duree h";
    }
}

$evale = new Evaluation("TALLA", "Saliou", 4907, "FulStack", "POO", "05/10/2023", 3);
$evale->evaluate();
