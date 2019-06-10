<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\GpuModel;
use App\Utils\EnumUtils;

class AdminGpuManagementController extends UserController {
    public function getGpus() {
        $gm = new GpuModel($this->getDatabaseConnection());
        $items = $gm->getAll();
        $this->set('gpus', $items);
    }

    public function getAdd() {
        $this->set("gpu_types", EnumUtils::getGPUTypes());
    }

    public function postAdd() {
        try{
        $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
        $type = filter_input(INPUT_POST, 'gpu_type', FILTER_SANITIZE_STRING);
        $video_memory = filter_input(INPUT_POST, 'video_memory', FILTER_SANITIZE_NUMBER_INT);

        
        $gm = new GpuModel($this->getDatabaseConnection());

        $res = $gm->add([
            'model' => $model,
            'type' => $type,
            'video_memory' => $video_memory
        ]);
       
        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja novog Gpu-a.');
            
            return;
        }
    }
    catch (\Throwable $e)
    {
        
        $this->set('message', 'Došlo je do greške prilikom dodavanja novog Gpu-a.');
        $this->set('description', $e->getMessage() );
         return;
        
    }

        \ob_clean();
        header('Location: ' . BASE . 'adminGpuManagement/getGpus/');
        exit;
    }

    public function getEdit($id) {
        $this->set("gpu_types", EnumUtils::getGPUTypes());

        $gm = new GpuModel($this->getDatabaseConnection());

        $gpu = $gm->getById($id);

        if (!$gpu) {
            \ob_clean();
            header('Location: ' . BASE . 'adminGpuManagement/getGpus/');
            exit;
        }

        $this->set('gpu', $gpu);
    }

    public function postEdit($id) {
        try{
        $this->getEdit($id);

        $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
        $type = filter_input(INPUT_POST, 'gpu_type', FILTER_SANITIZE_STRING);
        $video_memory = filter_input(INPUT_POST, 'video_memory', FILTER_SANITIZE_NUMBER_INT);
        $gm = new GpuModel($this->getDatabaseConnection());

        $res = $gm->editById($id, [
            'model' => $model,
            'type' => $type,
            'video_memory' => $video_memory
        ]);
        
        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene podataka ovog Gpu-a.');
            return;
        }
    }
    catch (\Throwable $e)
    {
        $this->set('message', 'Došlo je do greške prilikom izmene podataka ovog Gpu-a.');
        $this->set('description', $e->getMessage() );
        return;
    }

        \ob_clean();
        header('Location: ' . BASE . 'adminGpuManagement/getGpus/');
        exit;
    }

    public function deleteById($id) {
        $gm = new GpuModel($this->getDatabaseConnection());
        $res = $gm->deleteById($id);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom brisanja GPU-a.');
            return;
        }

        \ob_clean();
        header('Location: ' . BASE . 'adminGpuManagement/getGpus/');
        exit;
    }

}
