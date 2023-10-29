<?php

/**
 *  classe pour gérer une flotte de véhicule
 */
class Fleet
{
    private $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName($name){
        return $this->name;
    }

    /*
     * Enregistre dans une session
     * return false si cette flotte est déjà enregistrée
     */
    public function saveFleet(){
        if(!isset($_SESSION[$this->fleet->getName])){
            $_SESSION[$this->fleet->getName] = serialize($this);
            return true;
        }else{
            return false;
        }
    }

}