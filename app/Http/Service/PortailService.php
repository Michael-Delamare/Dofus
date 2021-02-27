<?php

namespace App\Http\Service;
use App\Models\Information_portail;

class PortailService{

    protected $couleurUtilisationPortail;

    public function __construct($portail)
    {
        $this->utiPortail = $portail->utilisation;
    }

    public function couleurUtilisationPortail($utiPortail){
        if($utiPortail <= 120 && $utiPortail >= 75){
             $this->couleurUtilisationPortail = "green";
        }
        elseif($utiPortail < 75 && $utiPortail >= 45){
         $this->couleurUtilisationPortail = "yellow";
        }
        elseif($utiPortail < 45){
         $this->couleurUtilisationPortail = "red";
        }
        return $this->couleurUtilisationPortail;
    }

}
