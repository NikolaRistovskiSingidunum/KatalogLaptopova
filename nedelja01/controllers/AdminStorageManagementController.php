<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\CategoryModel;
use App\Models\StorageModel;
use App\Utils\EnumUtils;

class AdminStorageManagementController extends UserController {

    /* Storage je implementiran na nacin tako da zavisi od id laptopa za koji je vezena */

    public function getStoragies($laptopId)
    {
        $storageModel = new StorageModel($this->getDatabaseConnection());

        $storagies = $storageModel->getAllByFieldName("laptop_id",$laptopId);

        $this->set("storagies",$storagies);
        $this->set("laptop_id",$laptopId);
    }

    public function deleteById($storageId)
    {
        $storageModel = new StorageModel($this->getDatabaseConnection());
        $laptopId = $storageModel->getById($storageId)->laptop_id;
 
        $res =$storageModel->deleteById($storageId);
        //die($res);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom brisanja diska.');
            return;
        }

 
        \ob_clean();
        header('Location: ' . BASE . 'adminStorageManagement/getStoragies/' . $laptopId);
        exit;
    }

    public function getAdd($laptopId)
    {
        //$storageModel = new StorageModel($this->getDatabaseConnection());

        $this->set("laptop_id",$laptopId);
        $this->set("storage_types",EnumUtils::getStorageTypes());
     
    }
    public function postAdd($laptopId)
    {
        try{
        $type = filter_input(INPUT_POST, 'storage_type', FILTER_SANITIZE_STRING);
        
        $capacity = filter_input(INPUT_POST, 'storage_capacity', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);

        $storageModel = new StorageModel($this->getDatabaseConnection());

        $res = $storageModel->add(['laptop_id'=>$laptopId,"capacity"=>$capacity, 'type'=>$type     ]);


        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja diska.');
            return;
        }

    }
    catch(\Throwable $e)
    {
        $this->set('message', 'Došlo je do greške prilikom dodavanja diska.');
        $this->set('description', $e->getMessage());
        return;

    } 
        \ob_clean();
        header('Location: ' . BASE . 'adminStorageManagement/getStoragies/' . $laptopId);
        exit;

        
    }
    public function getEdit($storageId)
    {
        $storageModel = new StorageModel($this->getDatabaseConnection());
        $storage = $storageModel->getById($storageId);

 

        $this->set("storage",$storage);
        $this->set("storage_types",EnumUtils::getStorageTypes());

    }

    public function postEdit($storageId)
    {
        try{
        $type = filter_input(INPUT_POST, 'storage_type', FILTER_SANITIZE_STRING);
        
        $capacity = filter_input(INPUT_POST, 'storage_capacity', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);

        $storageModel = new StorageModel($this->getDatabaseConnection());
        $res = $storageModel->editById($storageId, ["type"=>$type, "capacity"=>$capacity]);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene ovog diska.');
            return;
        }

    }
    catch(\Throwable $e)
    {
        $this->set('message', 'Došlo je do greške prilikom izmene ovog diska.');
        $this->set('description', $e->getMessage());
        return;
    }
        $laptopId = $storageModel->getById($storageId)->laptop_id;
        \ob_clean();
        header('Location: ' . BASE . 'adminStorageManagement/getStoragies/' . $laptopId);
        exit;

    }

    
}