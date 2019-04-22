<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;

class LaptopController extends Controller {
    public function show($broj) {
        // $am = new AuctionModel($this->getDatabaseConnection());
        // $auction = $am->getById($auctionId);

        // if ( !$am->isActive($auction) ) {
        //     ob_clean();
        //     header('Location: /nedelja01/');
        //     exit;
        // }

        // $om = new OfferModel($this->getDatabaseConnection());
        // $offers = $om->getAllByAuctionId($auctionId);
        
        // $price = $auction->starting_price;

        // if (count($offers) > 0) {
        //     $lastOffer = $offers[ count($offers) - 1 ];
        //     $price = $lastOffer->price;
        // }

        // $this->set('auction', $auction);
        // $this->set('lastPrice', $price);

        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops = $laptopModel->getAll();


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

        
        $this->set("laptops", $test);
        //$this->set("a", "neka vrednost" . $broj);
        //die($this->getData());

    }
}