<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;
    class CpuModel extends Model {
        protected function getFields() {
            return [
                'cpu_id'        => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10), false),
                'frequency'     => new Field(
                                        (new NumberValidator())
                                            ->setUnsigned()),
                'manufacturer'  => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)), 
                'model'         => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)),
                'core_count'    => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(4)) 
                                                                                                                                          
            ];
        }

    }