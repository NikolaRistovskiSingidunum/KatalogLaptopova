<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;

class AuctionController extends Controller {

    //pratimo konvenciju imenovanja, bitno je da postoji views/Aucution/show.html pod direktorijumom views
    public function show($auctionId) {
        $am = new AuctionModel($this->getDatabaseConnection());
        $auction = $am->getById($auctionId);

        if ( !$am->isActive($auction) ) {
            ob_clean();
            header('Location: /nedelja01/');
            exit;
        }

        $om = new OfferModel($this->getDatabaseConnection());
        $offers = $om->getAllByAuctionId($auctionId);
        
        $price = $auction->starting_price;

        if (count($offers) > 0) {
            $lastOffer = $offers[ count($offers) - 1 ];
            $price = $lastOffer->price;
        }

        $this->set('auction', $auction);
        $this->set('lastPrice', $price);
        -----
    }
}
