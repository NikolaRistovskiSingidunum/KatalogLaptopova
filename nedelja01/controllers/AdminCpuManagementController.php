<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\CpuModel;

class AdminCpuManagementController extends UserController {
    public function getCpus() {
        $cm = new CpuModel($this->getDatabaseConnection());
        $items = $cm->getAll();
        $this->set('cpus', $items);
    }

    public function getAdd() {
        
    }

    public function postAdd() {
        try{
        $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
        $manufacturer = filter_input(INPUT_POST, 'manufacturer', FILTER_SANITIZE_STRING);
        $frequency = filter_input(INPUT_POST, 'frequency', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $core_count = filter_input(INPUT_POST, 'core_count', FILTER_SANITIZE_NUMBER_INT); 
        
        $cm = new CpuModel($this->getDatabaseConnection());

        $res = $cm->add([
            'model' => $model,
            'manufacturer' => $manufacturer,
            'frequency' => $frequency,
            'core_count' => $core_count
        ]);
       
        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja novog Cpu-a.');
            return;
        }
    }
    catch (\Throwable $e)
    {
        
        $this->set('message', 'Došlo je do greške prilikom dodavanja novog Cpu-a.');
        $this->set('description', $e->getMessage() );
         return;
        
    }

        \ob_clean();
        header('Location: ' . BASE . 'adminCpuManagement/getCpus/');
        exit;
    }

    public function getEdit($id) {
        $cm = new CpuModel($this->getDatabaseConnection());

        $cpu = $cm->getById($id);

        if (!$cpu) {
            \ob_clean();
            header('Location: ' . BASE . 'adminCpuManagement/getCpus/');
            exit;
        }

        $this->set('cpu', $cpu);
    }

    public function postEdit($id) {
        try{
        $this->getEdit($id);

        $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
        $manufacturer = filter_input(INPUT_POST, 'manufacturer', FILTER_SANITIZE_STRING);
        $frequency = filter_input(INPUT_POST, 'frequency', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $core_count = filter_input(INPUT_POST, 'core_count', FILTER_SANITIZE_NUMBER_INT);
        $cm = new CpuModel($this->getDatabaseConnection());

        $res = $cm->editById($id, [
            'model' => $model,
            'manufacturer' => $manufacturer,
            'frequency' => $frequency,
            'core_count' => $core_count
        ]);
        
        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene podataka ovog Cpu-a.');
            return;
        }
    }
    catch (\Throwable $e)
    {
        $this->set('message', 'Došlo je do greške prilikom izmene podataka ovog Cpu-a.');
        $this->set('description', $e->getMessage() );
        return;
    }

        \ob_clean();
        header('Location: ' . BASE . 'adminCpuManagement/getCpus/');
        exit;
    }

    public function deleteById($id) {
        $cm = new CpuModel($this->getDatabaseConnection());
        $res = $cm->deleteById($id);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom brisanja CPU-a.');
            return;
        }

        \ob_clean();
        header('Location: ' . BASE . 'adminCpuManagement/getCpus/');
        exit;
    }

}
