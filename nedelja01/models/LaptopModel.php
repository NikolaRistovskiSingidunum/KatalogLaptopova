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

    class LaptopModel extends Model {

        protected function getFields() {
            return [
                'laptop_id'         => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10), false),
                'name'              => new Field(
                                            (new StringValidator())
                                                ->setMinLength(1)
                                                ->setMaxLength(255)
                                                ->setRegex("#^[A-Za-z][A-Za-z0-9 ]{0,244}$#")),
                'price'             => new Field((new NumberValidator())->setUnsigned()->setMin(1000)),
                'image_path'        => new Field(
                                            (new StringValidator())
                                                ->setMinLength(1)
                                                ->setMaxLength(255)),
                'operating_system'  => new Field(
                                            (new StringValidator())
                                                ->setMinLength(1)
                                                ->setMaxLength(255)
                                                ->setRegex("#^[A-Za-z][A-Za-z0-9 ]{0,244}$#")),
                'keyboard_layout'   => new Field(
                                            (new EnumValidator())->setData(EnumUtils::getKeyboardLayouts())),
                                              
                'is_numpad'         => new Field(new BitValidator()),
                'is_deleted'        => new Field(new BitValidator()),
                'cpu_id'            => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10)),
                'category_id'       => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10)),
                'display_id'        => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10)),
                'gpu_id'            => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10)),   
                'ram_capacity'      => new Field(
                                            (new NumberValidator())
                                                ->setInteger()
                                                ->setUnsigned()
                                                ->setMaxIntegerDigits(10)->setMin(1)->setMax(64)),  
                'ram_type'          => new Field(
                                            (new EnumValidator())->setData(EnumUtils::getRamTypes())),

                'manufacturer'      => new Field(
                                            (new StringValidator())
                                                ->setMinLength(1)
                                                ->setMaxLength(255)
                                                ->setRegex("#^[A-Za-z][A-Za-z0-9 ]{0,244}$#")),                                                                                                                                       
                'created_at'     => new Field(new DateTimeValidator(), false)
                
            ];
        }


        //pretraga po where i orderBy klauzuili
        public function getAllByWhereAndOrderBy($where,$orderBy): array {
            $tableName = $this->getTableName();
            
            
            $pdo = $this->getDatabaseConnection()->getConnection();

            $sql = "select laptop.laptop_id,laptop.is_numpad,laptop.image_path,
            laptop.created_at,laptop.keyboard_layout,
            laptop.manufacturer,laptop.`name` as 'laptop_name',
            laptop.operating_system,laptop.price,laptop.ram_capacity,laptop.ram_type,
            gpu.gpu_id,gpu.model as 'gpu_model',gpu.type,gpu.video_memory,
            category.`name` as 'category_name', 
            display.is_touchscreen,display.resolution,
            cpu.core_count,cpu.frequency,cpu.manufacturer as 'cpu_manufactor',cpu.model as 'cpu_model',
            screen_size
            
            from laptop
            join gpu on laptop.gpu_id=gpu.gpu_id
            join category on category.category_id = laptop.category_id
            join display on laptop.display_id = display.display_id
            join cpu on cpu.cpu_id = laptop.cpu_id ";
            

            $sqlValues =[];
            $this->prepareSQL($sql,$where,$orderBy, $sqlValues );


           
            $prep = $pdo->prepare($sql);
            //die($sql);
            $items = [];

            if ($prep) {
                $res = $prep->execute($sqlValues);

                if ($res) {
                    $items = $prep->fetchAll(PDO::FETCH_OBJ);
                }
            }

            return $items;
        }
        //vraca sve laptopove 
        // public function getAllLaptopsWithBasicInformations($where,$orderBy): array {
        //     $tableName = $this->getTableName();
            
            
        //     $pdo = $this->getDatabaseConnection()->getConnection();

        //     $sql = "select * from laptop";
        //     $sqlValues =[];
        //     $this->prepareSQL($sql,$where,$orderBy, $sqlValues );
            
           
        //     $prep = $pdo->prepare($sql);
        //     $items = [];
      
        //     if ($prep) {
        //         $res = $prep->execute($sqlValues);

        //         if ($res) {
        //             $items = $prep->fetchAll(PDO::FETCH_OBJ);
        //         }
         
        //     }


        
        //     //die($sql);
        //     return $items;
        // }
  

        // protected function prepareSQL(string &$sql,$where,$orderBy,&$sqlValues )
        // {
      
        //     $appendWhere = " WHERE true ";
        //     $appendOrderBy =" ORDER BY ";
        //     $keysWhere = array_keys($where);
        //     foreach($keysWhere as $keyWhere) {
        //         $appendWhere .=" and " . $keyWhere . "? ";
        //     }
        //     $keysOrderBy = [];
        //     if($orderBy!=null)
        //     $keysOrderBy=array_keys($orderBy);
        //     foreach($keysOrderBy as $keyOrderBy){
        //         $appendOrderBy .=  $keyOrderBy . " ? ,";
        //     }
        //     //brzi z
        //     $appendOrderBy .= " true ";
        //     //proveri where
        //     // if(strlen($where)>0)
        //     // $sql .=" WHERE " . $where;
        //     // //provre orederBy
            
        //     //dodaj terminator
        //     $sql .= $appendWhere;
        //     $sql .= $appendOrderBy;
        //     $sql .=";";

        //     $valuesWhere = array_values($where);
        //     $valuesOrderBy = [];
        //     if($orderBy!=null) 
        //     $valuesOrderBy = array_values($orderBy);
        //     $sqlValues = (array)$valuesWhere + (array)$valuesOrderBy;

          
        // }

        
        //brise laptop i storage i diskove

    }