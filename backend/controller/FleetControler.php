<?php
include("./model/Fleet.php");
include("./model/Vehicle.php");
include("./model/FleetRepository.php");
class FleetControler
{
    public function index(){
        require('view/index.php');
    }

    public function registerVehicle($immatriculation, $namefleet){
        $vehicle = new Vehicle();
        $vehicle->setImmatriculation($immatriculation);
        $fleet = new Fleet();
        $fleet->setName($namefleet);
        $vehicle->setFleet($fleet);

        $retour = $vehicle->saveVehicule();

        if($retour){
            $message = 'enregistrement réussi';
        }else{
            $message = 'Ce véhicule est déjà enregistré';
        }
        require('view/index.php');
    }

    public function createFleet($name){
        $fleet = new Fleet;
        $fleet->setName($name);
        $retour = $fleet->saveFleet();
        if($retour){
            $message = 'enregistrement réussi';
        }else{
            $message = 'Cette flote est déjà enregistrée';
        }
        require('view/index.php');
    }

    public function parkVehicle($position, Vehicle $vehicle){
        $vehicle->setPark($position);
    }
}