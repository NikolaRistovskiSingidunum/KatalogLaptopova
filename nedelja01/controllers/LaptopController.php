<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;
use App\Models\CategoryModel;

class LaptopController extends Controller {

    //vraca jedan laptop sa bazicnim informacijma
    public function getBasicInformations($laptopID)
    {
        
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptop = $laptopModel->getAllLaptopsWithBasicInformations(["laptop_id="=>$laptopID],[]);
        //print_r($laptop);
        // echo($laptop[0]->name);
        // //echo($laptop[0]).laptop_id );
        // die("AAA");

        if(!$laptop)
        die("LaptopController extends Controller public function getBasicInformations($laptopID) ");
        $this->set("laptop", $laptop[0]);
    }
    //vraca jedan laptop sa svim informacijama
    public function getAllInformations($laptopID)
    {
        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptop = $laptopModel->getAllLaptopsWithFullInformations(["laptop_id="=>$laptopID],[]);
       
        $this->set("laptop", $laptop[0]);
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
        if ($laptopCategoryID==="All")
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations([],["laptop.laptop_id"=>"DESC"]);
        else
            $laptops = $laptopModel->getAllLaptopsWithBasicInformations(["laptop.category_id="=>$laptopCategoryID],[]);



        $this->set("laptops", $laptops);
  
    }


    public function getShowFilters()
    {
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $items = [];
        $items = $categoryModel->getAll();
        $this->set("categories",$items);
    }
    public function postAllLaptopsByFilters()
    {
        $priceMin = filter_input(INPUT_POST, 'price_min',FILTER_SANITIZE_NUMBER_FLOAT);
        $priceMax = filter_input(INPUT_POST, 'price_max',FILTER_SANITIZE_NUMBER_FLOAT);
        $ramMin = filter_input(INPUT_POST, 'ram_min',FILTER_SANITIZE_NUMBER_INT);
        $ramMax = filter_input(INPUT_POST, 'ram_max',FILTER_SANITIZE_NUMBER_INT);
        $cpuSpeedMin = filter_input(INPUT_POST, 'cpu_speed_min',FILTER_SANITIZE_NUMBER_FLOAT);
        $cpuSpeedMax = filter_input(INPUT_POST, 'cpu_speed_max',FILTER_SANITIZE_NUMBER_FLOAT);
        //$sortByPrice = filter_input(INPUT_POST, 'sort_by_price');
        //govori  da li je ASC ili DESC, rastuci ili opadajuci
        $priceSortOrder = filter_input(INPUT_POST, 'price_sort_order');
        $categoryId = filter_input(INPUT_POST, 'category_id');

        $where = [];
        $orderBy = [];
        if($this->clampMinMax($priceMin,$priceMax))
        if($priceMin!=="" && $priceMax!=="" )
        {
            $where += ["price>="=>$priceMin];
            $where += ["price<="=>$priceMax];
        }
        if($this->clampMinMax($ramMin,$ramMax))
        if($ramMin!=="" && $ramMax!=="" )
        {
            $where += ["ram_capacity>="=>$ramMin];
            $where += ["ram_capacity<="=>$ramMax];
        }
        if($this->clampMinMax($cpuSpeedMin,$cpuSpeedMax))
        if($cpuSpeedMin!=="" && $cpuSpeedMax!=="" )
        {
            $where += ["ram_capacity>="=>$cpuSpeedMin];
            $where += ["ram_capacity<="=>$cpuSpeedMax];
        }

        if($categoryId!=="All")
        $where +=["laptop.category_id="=>$categoryId];


        if($priceSortOrder==="DESC" || $priceSortOrder==="ASC" )
        $orderBy =["price"=>$priceSortOrder];

        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops = $laptopModel->getAllLaptopsWithFullInformations($where,$orderBy);

   

        $this->set("laptops", $laptops);


        //die (gettype($priceMin));

        // $categoryId = filter_input(INPUT_POST, 'category_id');
        // if($priceMin==="" )
        //     die ("nije setovano" . $priceMin);
        // else
        //     die("korektan" . $priceMin);    
        // //die("AAAAA".$categoryId . "  BBBB  ". $priceSortOrder  );
        
    }

    //gleda da li su min i max u ispravnom opsegu
    private function clampMinMax(&$min,&$max)
    {
        if($min==="" || $max==="")
        return false;

        if($min>=$max)
        $min=0;

        if($max<=0)
        return false;

        return true;
    }
}