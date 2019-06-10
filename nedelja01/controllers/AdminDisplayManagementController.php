<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\GpuModel;
use App\Utils\EnumUtils;
use App\Models\DisplayModel;

class AdminDisplayManagementController extends UserController {

    public function getDisplays()
    {
        $displayModel = new DisplayModel($this->getDatabaseConnection());
        $displays = $displayModel->getAll();
        $this->set('displays', $displays);
    }

    public function getAdd()
    {

    }
    public function postAdd()
    {
        try{
            $screen_size = filter_input(INPUT_POST, 'screen_size', FILTER_SANITIZE_NUMBER_INT);
            $resolution = filter_input(INPUT_POST, 'resolution', FILTER_SANITIZE_STRING);
            $is_touchscreen = filter_input(INPUT_POST, 'is_touchscreen', FILTER_SANITIZE_NUMBER_INT);
    
            
            $displayModel = new DisplayModel($this->getDatabaseConnection());
    
            $res = $displayModel->add([
                'screen_size' => $screen_size,
                'resolution' => $resolution,
                'is_touchscreen' => $is_touchscreen
            ]);
           
            if (!$res) {
                $this->set('message', 'Došlo je do greške prilikom dodavanja novog ekrana');
                
                return;
            }
        }
        catch (\Throwable $e)
        {
            
            $this->set('message', 'Došlo je do greške prilikom dodavanja novog ekrana');
            $this->set('description', $e->getMessage() );
             return;
            
        }
    
            \ob_clean();
            header('Location: ' . BASE . 'adminDisplayManagement/getDisplays/');
            exit;
        
    }

    public function getEdit($displayId) {

        $displayModel = new DisplayModel($this->getDatabaseConnection());

        $display = $displayModel->getById($displayId);

        if (!$display) {
            \ob_clean();
            header('Location: ' . BASE . 'adminDisplayManagement/getDisplays/');
            exit;
        }

        $this->set('display', $display);
    }
    public function postEdit($displayId)
    {
        try{
        $screen_size = filter_input(INPUT_POST, 'screen_size', FILTER_SANITIZE_NUMBER_INT);
        $resolution = filter_input(INPUT_POST, 'resolution', FILTER_SANITIZE_STRING);
        $is_touchscreen = filter_input(INPUT_POST, 'is_touchscreen', FILTER_SANITIZE_NUMBER_INT);
        
       

        $displayModel = new DisplayModel($this->getDatabaseConnection());
        
        $res = $displayModel->editById($displayId, [
            'screen_size' => $screen_size,
            'resolution' => $resolution,
            'is_touchscreen' => $is_touchscreen
        ]);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene Ekrana.');
            //die("opet neka greska");
            return;
        }

    }
    catch (\Throwable $e)
    {
        $this->set('message', 'Došlo je do greške prilikom izmene Ekrana.');
        $this->set('description', $e->getMessage());
        return;
    }
        
        \ob_clean();
        header('Location: ' . BASE . 'adminDisplayManagement/getDisplays/');
        exit;
    }

    public function deleteById($displayId) {
        $displayModel = new DisplayModel($this->getDatabaseConnection());
        $res = $displayModel->deleteById($displayId);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom brisanja Ekrana.');
            $this->set('description', 'Proverite da li brisete ekran za koji postoji laptop koji ga koriste.');
            return;
        }

        \ob_clean();
        header('Location: ' . BASE . 'adminDisplayManagement/getDisplays/');
        exit;
    }

}