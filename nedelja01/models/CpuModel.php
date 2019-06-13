<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \App\Validators\NumberValidator;
    use \App\Validators\StringValidator;
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
                                            ->setUnsigned()
                                            ->setMin(1)
                                            ->setMax(10)),
                'manufacturer'  => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)
                                            ->setRegex("#^[A-Za-z][A-Za-z0-9 ]{0,244}$#")), 
                'model'         => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(255)
                                            ->setRegex("#^[A-Za-z][A-Za-z0-9 ]{0,244}$#")),
                'core_count'    => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(4)
                                            ->setMin(1)->setMax(64)) 
                                                                                                                                          
            ];
        }

    }