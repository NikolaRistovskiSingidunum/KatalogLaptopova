<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;

    class PortModel extends Model {

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