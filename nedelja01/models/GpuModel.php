<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \App\Validators\NumberValidator;
    use \App\Validators\StringValidator;
    use \App\Validators\EnumValidator;
    use \PDO;
    use \App\Utils\EnumUtils;
    class GpuModel extends Model {
        protected function getFields() {
            return [
                'gpu_id'        => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10), false),
                'type'          => new Field(
                                        (new EnumValidator())
                                        ->setData(EnumUtils::getGPUTypes())),
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