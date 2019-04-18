<?php
    namespace App\Models;

    use \App\Core\Model;
    use App\Core\Field;

    class CategoryModel extends Model {
        protected function getFields() {
            return [
                'category_id' => Field::readonlyInteger(11),
                'name'        => Field::editableString(1, 64),
            ];
        }

        public function getAllSorted() {
            $pdo = $this->getDatabaseConnection()->getConnection();
            $sql = 'SELECT * FROM category ORDER BY title DESC;';
            $prep = $pdo->prepare($sql);
            $items = [];

            if ($prep) {
                $res = $prep->execute();

                if ($res) {
                    $items = $prep->fetchAll(PDO::FETCH_OBJ);
                }
            }

            return $items;
        }
    }
