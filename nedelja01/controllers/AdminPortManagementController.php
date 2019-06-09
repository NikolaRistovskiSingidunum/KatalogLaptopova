<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\CategoryModel;
use App\Models\PortModel;

class AdminPortManagementController extends UserController {

    public function getPorts($laptopId)
    {
        $portModel = new PortModel($this->getDatabaseConnection());

        $ports = $portModel->getAllByFieldName("laptop_id",$laptopId);

        $this->set("ports",$ports);
        $this->set("laptop_id",$laptopId);
    }

    public function deleteById($portId)
    {
        $portModel = new PortModel($this->getDatabaseConnection());
        $laptopId = $portModel->getById($portId)->laptop_id;
 
        $res =$portModel->deleteById($portId);
        //die($res);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom brisanja porta.');
            return;
        }
        if(!$laptopId )
        {
            
            $this->set('message', 'Port po brojem ' . $portId . ' ne postoji');
            //echo( "nije validan port ");
            return;
 
        }
        //die("AAA" . $laptopId);
 
        \ob_clean();
        header('Location: ' . BASE . 'adminPortManagement/getPorts/' . $laptopId);
        exit;
    }

    public function getAdd($laptopId)
    {
        //$storageModel = new StorageModel($this->getDatabaseConnection());

        $this->set("laptop_id",$laptopId);
        $this->set("port_types",[0=>'HDMI',1=>'VGA',2=>'DVI',3=>'Video Port',4=>'USB C']);
     
    }

    public function postAdd($laptopId)
    {
        $type = filter_input(INPUT_POST, 'port_type', FILTER_SANITIZE_STRING);
        
       

        $portModel = new PortModel($this->getDatabaseConnection());

        $res = $portModel->add(['laptop_id'=>$laptopId, 'type'=>$type     ]);


        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja laptopa.');
            return;
        }

        \ob_clean();
        header('Location: ' . BASE . 'adminPortManagement/getPorts/' . $laptopId);
        exit;

        
    }

    public function getEdit($portId)
    {
        $portModel = new PortModel($this->getDatabaseConnection());
        $port = $portModel->getById($portId);

 

        $this->set("port",$port);
        $this->set("port_types",[0=>'HDMI',1=>'VGA',2=>'DVI',3=>'Video Port',4=>'USB C']);

    }

    public function postEdit($portId)
    {
        $type = filter_input(INPUT_POST, 'port_type', FILTER_SANITIZE_STRING);
        
       

        $portModel = new PortModel($this->getDatabaseConnection());

        
        $res = $portModel->editById($portId, ["type"=>$type]);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene porta.');
            //die("opet neka greska");
            return;
        }

        $laptopId = $portModel->getById($portId)->laptop_id;
        \ob_clean();
        header('Location: ' . BASE . 'adminPortManagement/getPorts/' . $laptopId);
        exit;
    }
}