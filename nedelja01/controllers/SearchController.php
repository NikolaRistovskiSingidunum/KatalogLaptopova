<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;

class SearchController extends Controller {
    public function showFilters() {

       //this->set("aaa",['dddd']);
    }
    public function showByFilters() {


        $priceMin = filter_input(INPUT_POST, 'priceMin',FILTER_VALIDATE_FLOAT);
        $priceMax = filter_input(INPUT_POST, 'priceMax',FILTER_VALIDATE_FLOAT);
        $ramMin = filter_input(INPUT_POST, 'ramMin',FILTER_VALIDATE_INT);
        $ramMax = filter_input(INPUT_POST, 'ramMax',FILTER_VALIDATE_INT);
        $cpuSpeedMin = filter_input(INPUT_POST, 'cpuSpeedMin',FILTER_VALIDATE_FLOAT);
        $cpuSpeedMax = filter_input(INPUT_POST, 'cpuSpeedMax',FILTER_VALIDATE_FLOAT);
        $sortByPrice = filter_input(INPUT_POST, 'sortByPrice');
        //govori  da li je ASC ili DESC, rastuci ili opadajuci
        $priceSortOrder = filter_input(INPUT_POST, 'priceSortOrder');
        // echo("priceMin" . $priceMin);
        // echo("<br>");
        // echo("priceMax" . $priceMax);
        // echo("<br>");
        // echo("ramMin" . $ramMin);
        // echo("<br>");
        // echo("ramMax" . $ramMax);
        // echo("<br>");
        // echo("cpuSpeedMin" . $cpuSpeedMin);
        // echo("<br>");
        // echo("cpuSpeedMax". $cpuSpeedMax);
        // echo("<br>");
        // echo("sortByPrice". $sortByPrice);
        // echo("<br>");
        // echo("price sort order ". $priceSortOrder);
        // echo("<br>");
        // if(!$priceMax)
        // echo("nije ok");
        // echo("<br>;;<br>");

        //Generalno gledano ovo treba da se uradi na pametniji nacin


        //napravi where, uradi brzi work around 
        $where = "(1=1)";

        if($this->checkValidityAndRange($priceMin,$priceMax))
        {

        $where .="and ";
        $where .= "(" . "laptop.price >= ".$priceMin ." and laptop.price <=" .$priceMax .")" ;
        }   
        
        if($this->checkValidityAndRange($ramMin,$ramMax))
        {
        $where .="and ";    
        $where .= "(" . "laptop.ram_capacity >= ".$ramMin ." and laptop.ram_capacity <=" .$ramMax .")" ;
        }

        if($this->checkValidityAndRange($cpuSpeedMin,$cpuSpeedMax))
        {
        $where .="and";    
        $where .= "(" . "cpu.frequency >= ".$cpuSpeedMin ." and cpu.frequency<=" . $cpuSpeedMax .")" ;
        }


        //Hapravi oreder by
        $orderBy = "";
        if($sortByPrice)
        {
            $orderBy .= "laptop.price " . $priceSortOrder;
        }

        $laptopModel = new LaptopModel($this->getDatabaseConnection());
        $laptops = $laptopModel->getAllJoinedByWhereAndOrder($where,$orderBy);
        $this->set("laptops", $laptops);

        // if($this->checkValidityAndRange($priceMin,$priceMax))
        // echo($this->checkValidityAndRange($priceMin,$priceMax));


        // die("AL");
        //this->set("aaa",['dddd']);
     }
     //poverava da li su variable a i b dobro definisane(da li imaju vrednost ili su null) i da li je a < od b
     //kada se vrati false, onda a i b nece biti ukljucene u where vrednost>a and vrednost<b 
     private function checkValidityAndRange($a,$b)
     {
        //ne radi kada je a jednako =0 
        //debagovati kasnije
        return ($a==true) and ($b==true) and  ($a>=0) and ($a<=$b);
     }
 

    
}
