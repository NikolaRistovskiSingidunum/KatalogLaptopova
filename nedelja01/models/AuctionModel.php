<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;

    class AuctionModel extends Model {
        protected function getFields() {
            return [
                'auction_id'     => Field::readonlyInteger(11),
                'created_at'     => Field::readonlyDateTime(),
                'title'          => Field::editableString(1, 255),
                'description'    => Field::editableString(1, 65000),
                'starting_price' => Field::editableMaxDecimal(10, 2),
                'starts_at'      => Field::editableDateTime(),
                'ends_at'        => Field::editableDateTime(),
                'is_active'      => Field::editableBit(),
                'category_id'    => Field::editableInteger(11),
                'user_id'        => Field::editableInteger(11),
                'image_path'     => Field::editableString(1, 255)
            ];
        }

        public function getAllByCategoryId(int $categoryId): array {
            return $this->getAllByFieldName('category_id', $categoryId);
        }

        public function isActive($auction) {
            if (!$auction) {
                return false;
            }

            if ($auction->is_active == 0) {
                return false;
            }

            /*if ( \strtotime($auction->starts_at) > time() ) {
                return false;
            }

            if ( \strtotime($auction->ends_at) < time() ) {
                return false;
            }*/

            return true;
        }
    }
