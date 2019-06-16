<?php
namespace App\Controllers;

use App\Core\UserController;
use App\Models\CategoryModel;
use App\Models\LaptopModel;
use App\Models\CpuModel;
use App\Models\GpuModel;
use App\Models\DisplayModel;
use App\Utils\EnumUtils;
use App\Models\PortModel;
use App\Models\StorageModel;

class AdminLaptopManagementController extends UserController {
   


    public function getEdit($id)
    {
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops;
        $laptops = $laptopModel->getById($id);


        $cpuModel = new CpuModel($this->getDatabaseConnection());
        $cpus = $cpuModel->getAll();

        $gpuModel = new GpuModel($this->getDatabaseConnection());
        $gpus = $gpuModel->getAll();


        $displayModel = new DisplayModel($this->getDatabaseConnection());
        $displays = $displayModel->getAll();

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        $this->set("laptop",$laptops);
        $this->set("keyboard_layouts",EnumUtils::getKeyboardLayouts());
        $this->set("cpus",$cpus);
        $this->set("gpus",$gpus);
        $this->set("displays",$displays);
        $this->set("categories",$categories);
        $this->set("ram_types",EnumUtils::getRamTypes());
        
    }
    public function postEdit($id)
    {

        try{
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $operating_system = filter_input(INPUT_POST, 'operating_system', FILTER_SANITIZE_STRING);
        $keyboard_layout = filter_input(INPUT_POST, 'keyboard_layout', FILTER_SANITIZE_STRING);
        $is_numpad = filter_input(INPUT_POST, 'is_numpad', FILTER_SANITIZE_NUMBER_INT);
        $is_deleted = 0 ;//filter_input(INPUT_POST, 'is_deleted', FILTER_SANITIZE_NUMBER_INT);
        $cpu_id = filter_input(INPUT_POST, 'cpu_id', FILTER_SANITIZE_NUMBER_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
        $display_id = filter_input(INPUT_POST, 'display_id', FILTER_SANITIZE_NUMBER_INT);
        $gpu_id = filter_input(INPUT_POST, 'gpu_id', FILTER_SANITIZE_NUMBER_INT);
        $ram_capacity = filter_input(INPUT_POST, 'ram_capacity', FILTER_SANITIZE_NUMBER_INT);
        $ram_type = filter_input(INPUT_POST, 'ram_type', FILTER_SANITIZE_STRING);
        $manufacturer = filter_input(INPUT_POST, 'manufacturer', FILTER_SANITIZE_STRING);

        //die($price);        

        $laptopModel = new LaptopModel($this->getDatabaseConnection());

        $res = $laptopModel->editById($id, [
            'name' => $name, 'price' => $price, 'operating_system' => $operating_system,
            'keyboard_layout'=>$keyboard_layout, 'is_numpad'=>$is_numpad,'is_deleted'=>$is_deleted,'cpu_id'=>$cpu_id,
            'category_id'=>$category_id,'display_id'=>$display_id,'gpu_id'=>$gpu_id,'ram_capacity'=>$ram_capacity,
            'ram_type'=>$ram_type,'manufacturer'=>$manufacturer
        ]);


        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom izmene podataka ovog laptopa.');
            return;
        }

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image_path = $laptopModel->getById(intval($id))->image_path;
            unlink(\Configuration::UPLOAD_DIR . $image_path);
            if (!$this->doUpload('image', $id)) { 
                return;
            }

            $uploaded_img_path = $this->getData()['path'];

            $res = $laptopModel->editById(intval($id), ['image_path' => $uploaded_img_path]);

            if (!$res) {
                $this->set('message', 'Došlo je do greške prilikom izmene slike ovog laptopa.');
                return;
            }
        }
    }
    catch(\Throwable $e)
    {
        //die("AAAAAAAA");
        $this->set('message', 'Došlo je do greške prilikom izmene ovog laptopa.');
        $this->set('description', $e->getMessage());
        return;
    }

        \ob_clean();
        header('Location: ' . BASE . 'laptop/getAllInformations/' . $id);
        exit;
    }

    public function getAdd()
    {
        //template za dodavanje laptopa ima id=1
        $id=1;
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops;
        $laptops = $laptopModel->getById($id);


        $cpuModel = new CpuModel($this->getDatabaseConnection());
        $cpus = $cpuModel->getAll();

        $gpuModel = new GpuModel($this->getDatabaseConnection());
        $gpus = $gpuModel->getAll();


        $displayModel = new DisplayModel($this->getDatabaseConnection());
        $displays = $displayModel->getAll();

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        $this->set("laptop",$laptops);
        $this->set("keyboard_layouts",EnumUtils::getKeyboardLayouts());
        $this->set("cpus",$cpus);
        $this->set("gpus",$gpus);
        $this->set("displays",$displays);
        $this->set("categories",$categories);
        $this->set("ram_types",EnumUtils::getRamTypes());
        
    }


    public function postAdd()
    {
        try{
       
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $operating_system = filter_input(INPUT_POST, 'operating_system', FILTER_SANITIZE_STRING);
        $keyboard_layout = filter_input(INPUT_POST, 'keyboard_layout', FILTER_SANITIZE_STRING);
        $is_numpad = filter_input(INPUT_POST, 'is_numpad', FILTER_SANITIZE_NUMBER_INT);
        $is_deleted = 0; //filter_input(INPUT_POST, 'is_deleted', FILTER_SANITIZE_NUMBER_INT);
        $cpu_id = filter_input(INPUT_POST, 'cpu_id', FILTER_SANITIZE_NUMBER_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
        $display_id = filter_input(INPUT_POST, 'display_id', FILTER_SANITIZE_NUMBER_INT);
        $gpu_id = filter_input(INPUT_POST, 'gpu_id', FILTER_SANITIZE_NUMBER_INT);
        $ram_capacity = filter_input(INPUT_POST, 'ram_capacity', FILTER_SANITIZE_NUMBER_INT);
        $ram_type = filter_input(INPUT_POST, 'ram_type', FILTER_SANITIZE_STRING);
        $manufacturer = filter_input(INPUT_POST, 'manufacturer', FILTER_SANITIZE_STRING);

        $image_path = \Configuration::DEFAULT_IMAGE;     
        
        $laptopModel = new LaptopModel($this->getDatabaseConnection());

        
        $laptopId = $laptopModel->add([
            'name' => $name, 'price' => $price, 'image_path'=>$image_path, 'operating_system' => $operating_system,
            'keyboard_layout'=>$keyboard_layout, 'is_numpad'=>$is_numpad,'is_deleted'=>$is_deleted,'cpu_id'=>$cpu_id,
            'category_id'=>$category_id,'display_id'=>$display_id,'gpu_id'=>$gpu_id,'ram_capacity'=>$ram_capacity,
            'ram_type'=>$ram_type,'manufacturer'=>$manufacturer
        ]);


        if (!$laptopId) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja laptopa.');
            
            return;
        }

        if (!$this->doUpload('image', $laptopId)) { 
            return;
        }

        $uploaded_img_path = $this->getData()['path'];

        $res = $laptopModel->editById(intval($laptopId), ['image_path' => $uploaded_img_path]);

        if (!$res) {
            $this->set('message', 'Došlo je do greške prilikom dodavanja slike.');
            return;
        }

    }
    catch(\Throwable $e)
    {
        //die("AAAAAAAA");
        $this->set('message', 'Došlo je do greške prilikom dodavanja laptopa.');
        $this->set('description', $e->getMessage());
        return;
    }
        \ob_clean();
        header('Location: ' . BASE . 'laptop/getAllInformations/' . $laptopId);
        exit;
    }
    public function deleteById($laptopId) {
        // $laptopModel = new LaptopModel($this->getDatabaseConnection());
        // $res = $laptopModel->deleteById($laptopId);

        $res = $this->deleteAllLaptopDependenciesById($laptopId);
        if(!$res)
        {
   
            $this->set('message', 'Došlo je do greške prilikom brisanja laptopa.');
            return;
        }        
        \ob_clean();
        header('Location: ' . BASE . 'laptop/getAllLaptopsByCategoryId/All');
        exit;
    }

    private function doUpload(string $fieldName, string $filename): bool {

        $path = new \Upload\Storage\FileSystem(\Configuration::UPLOAD_DIR);
        $file = new \Upload\File($fieldName, $path);
        $file->setName($filename);
        $file->addValidations([
            new \Upload\Validation\Mimetype(['image/jpeg', "image/png"]),
            new \Upload\Validation\Size('3M')
        ]);

        try {
            $file->upload();

            $fullFilename = $file->getNameWithExtension();

            $this->set("path", $fullFilename);
            return true;
        } catch (\Exception $e) {
            $this->set('message', 'Došlo je do greške: ' . implode(', ', $file->getErrors()));
            return false;
        }
    }

    //brise storage i port data prvo pa onda i laptop
    private function deleteAllLaptopDependenciesById($laptopId)
    {
        $status = true;



        $portModel = new PortModel($this->getDatabaseConnection());
        $status = $status && $portModel->deleteByFieldValue("laptop_id",$laptopId);


        $storageModel = new StorageModel($this->getDatabaseConnection());
        $status = $status && $storageModel->deleteByFieldValue("laptop_id",$laptopId);

        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $status = $status && $laptopModel->deleteById($laptopId);

        return $status;

    }
}
