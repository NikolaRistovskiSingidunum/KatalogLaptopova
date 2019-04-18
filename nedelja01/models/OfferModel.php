<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;

    class OfferModel extends Model {
        protected function getFields() {
            return [
                'offer_id'    => Field::readonlyInteger(20),
                'created_at'  => Field::readonlyDateTime(),
                'auction_id'  => Field::editableInteger(11),
                'user_id'     => Field::editableInteger(11),
                'price'       => Field::editableMaxDecimal(10, 2)
            ];
        }

        public function getAllByAuctionId(int $auctionId): array {
            return $this->getAllByFieldName('auction_id', $auctionId);
        }
    }
