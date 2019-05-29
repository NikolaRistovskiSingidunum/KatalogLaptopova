<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;

class LaptopController extends Controller {

    //vraca jedan laptop sa bazicnim informacijma
    public function getBasicInformations($laptopID)
    {
        
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptop = $laptopModel->getAllLaptopsWithBasicInformations(["laptop_id="=>$laptopID],[]);
        print_r($laptop);
        die("AAA");
        $this->set("laptop", $laptop);
    }
    //vraca jedan laptop sa svim informacijama
    public function getAllInformations($laptopID)
    {
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptop = $laptopModel->getAllLaptopsWithFullInformations(["laptop_id="=>$laptopID],[]);
        print_r($laptop);
        die("AAA");
        $this->set("laptop", $laptop);
    }

    //vraca sve laptopova iz odredjeni kategorije
    //ako je kategorija All onda vraca sve laptopova iz svih kategorija
    //vraca samo bazicne informacije 
    //pretraga po imenu
    public function getAllLaptopsByCategoryName($laptopCategoryName)
    {
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops;
        if ($laptopCategoryName==="All")
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations([],[]);
        else
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations(["category.name="=>$laptopCategoryName],[]);

        print_r($laptops);
        echo(count($laptops));
        die("[[[[[");    
        $this->set("laptops", $laptops);
  
    }


    //vraca sve laptopova iz odredjeni kategorije
    //ako je kategorija All onda vraca sve laptopova iz svih kategorija
    //vraca samo bazicne informacije 
    //pretraga po imenu
    public function getAllLaptopsByCategoryId($laptopCategoryID)
    {
   
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops;
        if ($laptopCategoryID==="-1")
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations([],["laptop.laptop_id"=>"DESC"]);
        else
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations(["laptop.category_id="=>$laptopCategoryID],[]);

        print_r($laptops);
        echo(count($laptops));
        die("[[[[[");    
        $this->set("laptops", $laptops);
  
    }


    public function getAllLaptopsByFilters()
    {

    }
    public function postAllLaptopsByFilters()
    {

    }
}