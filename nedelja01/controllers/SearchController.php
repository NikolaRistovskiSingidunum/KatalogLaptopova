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

        // $where = "";

        // if($this->checkValidityAndRange($priceMin,$priceMax))
        // $where .= "price >= ".$price;


        // if($this->checkValidityAndRange($priceMin,$priceMax))
        // echo($this->checkValidityAndRange($priceMin,$priceMax));


        // die("AL");
        //this->set("aaa",['dddd']);
     }
     //poverava da li su variable a i b dobro definisane(da li imaju vrednost ili su null) i da li je a < od b
     //kada se vrati false, onda a i b nece biti ukljucene u where vrednost>a and vrednost<b 
     private function checkValidityAndRange($a,$b)
     {
        return $a && $b && $a<$b;
     }
 

    
}
