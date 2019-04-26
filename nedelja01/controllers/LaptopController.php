<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;

class LaptopController extends Controller {
    public function show($broj) {
   

        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops = $laptopModel->getAllJoined();


        $test = [['laptop_id'=>"neki id", 
        'name' =>"neko ime ds"    ,
        'price'=>"1600"         ,
        'image_path'=>"image path",    
        'operating_system'=>"neki os", 
        'keyboard_layout'=>"neki layout "  ,    
        'is_numpad' =>"mozda je num pada"     ,  
        'is_deleted'=>"idalje je tu"],
        ['laptop_id'=>"neki id", 
        'name' =>"neko ime"    ,
        'price'=>"1600"         ,
        'image_path'=>"image path",    
        'operating_system'=>"neki os", 
        'keyboard_layout'=>"neki layout "  ,    
        'is_numpad' =>"mozda je num pada"     ,  
        'is_deleted'=>"idalje je tu"]      ];

        
        $this->set("laptops", $laptops);
       

    }
    public function showByCategory($fieldName, $value)
    {

    }
}