<?php
namespace App\Controllers;

use App\Core\ApiController;
use App\Models\StorageModel;
use App\Models\PortModel;

class DetailApiController extends ApiController {
    public function details($laptopId) {
        //pristupa sotrage i detail modelu, vadi informacije i pakuje ih u data pod odgovaracjucim kljucevima



        $storageModel = new StorageModel($this->getDatabaseConnection());
        $storageItems = $storageModel->getAllByFieldName("laptop_id",$laptopId) ;
        $this->set('storagies', $storageItems);


        $portModel = new PortModel($this->getDatabaseConnection());
        $portItems = $portModel->getAllByFieldName("laptop_id",$laptopId) ;
        $this->set('ports', $portItems);
        
    }

}