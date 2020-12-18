<?php
class Employe
{

    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;


    public function getNom()
    { 
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
  
    }

    public function getFonction()
    {
        return $this->_fonction;
  
    }


    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function getService()
    {
        return $this->_service;
    }
    
            
        
    public function setNom($nom)
    {

        $this->_nom = $nom;
    }


    public function setPrenom($prenom)
    {
    
        $this->_prenom = $prenom;
    }

    public function setDateEmbauche($dateembauche)
    {
        $this->_dateEmbauche = $dateembauche;
    }

    public function setFonction($fonction){
        $this->_fonction = $fonction;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }









}