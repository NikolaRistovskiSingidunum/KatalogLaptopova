<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;
    use \App\Validators\BitValidator;
    use \App\Validators\DateTimeValidator;
    use \App\Validators\IpAddressValidator;
    use \App\Validators\NumberValidator;
    use \App\Validators\StringValidator;
    use \App\Validators\EnumValidator;
    use App\Utils\EnumUtils;

    class StorageModel extends Model {
        protected function getFields() {
            return [
                'storage_id'    => new Field(
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
                                        (new EnumValidator())
                                            ->setData(EnumUtils::getStorageTypes())
                                        ),
                'capacity'      => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10)
                                            ->setMin(100)
                                            ->setMax(2000))                                        
            ];
        }

        public function getStorages($laptopID)
        {


            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql = "Select * from Storage where laptop_id = ?";

            
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