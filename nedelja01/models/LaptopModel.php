<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;

    class LaptopModel extends Model {

        //ovo nije dobro, treba prepraviti
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

       

        //nisam siguran da li zelimo da podatke vadimo kompleksnim upitom iz baze ili zelimo da u kodu kombinujemo odgovarajuce upit
        public function getAllJoined(): array {
            $tableName = $this->getTableName();
            
            
            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql = "select laptop.laptop_id,laptop.is_numpad,laptop.image_path,
            laptop.created_at,laptop.keyboard_layout,
            laptop.manufacturer,laptop.`name` as 'laptop_name',
            laptop.operating_system,laptop.price,laptop.ram_capacity,laptop.ram_type,
            gpu.gpu_id,gpu.model as 'gpu_model',gpu.type,gpu.video_memory,
            category.`name` as 'category_name', 
            display.is_touchscreen,display.resolution,
            cpu.core_count,cpu.frequency,cpu.manufacturer as 'cpu_manufactor',cpu.model as 'cpu_model'
            
            from laptop
            join gpu on laptop.gpu_id=gpu.gpu_id
            join category on category.category_id = laptop.category_id
            join display on laptop.display_id = display.display_id
            join cpu on cpu.cpu_id = laptop.cpu_id;";
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

        public function getAllByFieldNameJoined(string $name, $value)
        {
            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql ="select laptop.laptop_id,laptop.is_numpad,laptop.image_path,
            laptop.created_at,laptop.keyboard_layout,
            laptop.manufacturer,laptop.`name` as 'laptop_name',
            laptop.operating_system,laptop.price,laptop.ram_capacity,laptop.ram_type,
            gpu.gpu_id,gpu.model as 'gpu_model',gpu.type,gpu.video_memory,
            category.`name` as 'category_name', 
            display.is_touchscreen,display.resolution,
            cpu.core_count,cpu.frequency,cpu.manufacturer as 'cpu_manufactor',cpu.model as 'cpu_model'
            
            from laptop
            join gpu on laptop.gpu_id=gpu.gpu_id
            join category on category.category_id = laptop.category_id
            join display on laptop.display_id = display.display_id
            join cpu on cpu.cpu_id = laptop.cpu_id
						where " . $name ."=". "?" . ";";
                        

            $prep = $pdo->prepare($sql);
            $items = [];
            if ($prep) {
                $prep->execute( [ $value ] );

                $items = $prep->fetchAll(PDO::FETCH_OBJ);

                if (!$items) {

                    $items = [];
                }
            }

            return $items;                
                                
        }
        //uzima sve laptopove koji koristeci where and orderBy condition
        public function getAllJoinedByWhereAndOrder(string $where,string $orderBy): array {
            $tableName = $this->getTableName();
            
            
            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql = "select laptop.laptop_id,laptop.is_numpad,laptop.image_path,
            laptop.created_at,laptop.keyboard_layout,
            laptop.manufacturer,laptop.`name` as 'laptop_name',
            laptop.operating_system,laptop.price,laptop.ram_capacity,laptop.ram_type,
            gpu.gpu_id,gpu.model as 'gpu_model',gpu.type,gpu.video_memory,
            category.`name` as 'category_name', 
            display.is_touchscreen,display.resolution,
            cpu.core_count,cpu.frequency,cpu.manufacturer as 'cpu_manufactor',cpu.model as 'cpu_model'
            
            from laptop
            join gpu on laptop.gpu_id=gpu.gpu_id
            join category on category.category_id = laptop.category_id
            join display on laptop.display_id = display.display_id
            join cpu on cpu.cpu_id = laptop.cpu_id";
            //proveri where
            if(strlen($where)>0)
            $sql .=" WHERE " . $where;
            //provre orederBy
            if(strlen($orderBy)>0)
            $sql .=" ORDER BY " . $orderBy;
            //dodaj terminator
            $sql .=";";



           //die($sql);
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
