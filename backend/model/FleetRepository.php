<?php
include("./Vehicle.php");
class FleetRepository
{
    public function getFleetByName($name){
        $fleets=  $_SESSION[$name];

        $fleet = [];
        foreach ($fleets as $vehicle){
            $vehiclefleet =  new Vehicle($vehicle);
            $vehiclefleet->setImmatriculation();
            $fleet[] = $vehiclefleet;
        }
        return $fleet;
    }
}