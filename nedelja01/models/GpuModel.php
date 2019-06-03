<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;
    class GpuModel extends Model {
        protected function getFields() {
            return [
                'gpu_id'        => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10), false),
                'type'          => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)),
                'model'         => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)),
                'video_memory'  => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10)) 
                                                                                                                                          
            ];
        }

    }