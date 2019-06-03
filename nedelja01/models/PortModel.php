<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;

    class PortModel extends Model {
        protected function getFields() {
            return [
                'port_id'       => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10), false),
                'laptop_id'     => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10)),
                'type'          => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255))                                      
            ];
        }

        public function getPorts($laptopID)
        {


            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql = "Select * from Port where laptop_id = ?";

            
           //die($sql);
           $prep = $pdo->prepare($sql);
           $items = [];

           if ($prep) {
               $res = $prep->execute([$laptopID]);

               if ($res) {
                   $items = $prep->fetchAll(PDO::FETCH_OBJ);
               }
           }

           return $items;
        }
    }