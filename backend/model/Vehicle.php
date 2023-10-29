<?php
session_start();
include("Fleet.php");
/**
 * Classe qui permet de gérer un véhicule
 */
class Vehicle
{
    private $immatriculation;
    private $park;
    private $fleet;

    public function setImmatriculation($immatriculation){
        $this->immatriculation = $immatriculation;
    }

    public function getImmatriculation($immatriculation){
        return $this->immatriculation;
    }

    public function setPark($position){
        $this->park = $position;
    }

    public function getPark(){
        return $this->park;
    }

    public function setFleet(Fleet $fleet){
        $this->fleet = $fleet;
    }

    /*
     * Enregistre dans une session
     * return false si cette voiture est déjà enregistrée
     */
    public function saveVehicule(){
        if(!isset($_SESSION[$this->fleet->getName][$this->immatriculation])){
            $_SESSION[$this->fleet->getName][$this->immatriculation] = serialize($this);
            return true;
        }else{
            return false;
        }
    }

}