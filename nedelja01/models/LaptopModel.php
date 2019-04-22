<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;

    class LaptopModel extends Model {
        protected function getFields() {
            return [
                'laptop_id'     => Field::readonlyInteger(11),
                'name'     => Field::editableString(1,255),
                'price'          => Field::editableDecimal(10,2),
                'image_path'    => Field::editableString(1, 255),
                'operating_system' => Field::editableString(1, 255),
                'keyboard_layout'      => Field::editableString(1,3),
                'is_numpad'        => Field::editableBit(),
                'is_deleted'      => Field::editableBit(),
            ];
        }

        // public function getAllByCategoryId(int $categoryId): array {
        //     return $this->getAllByFieldName('category_id', $categoryId);
        // }


    }
