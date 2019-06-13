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
    use \App\Utils\EnumUtils;
    class DisplayModel extends Model {
        protected function getFields() {
            return [
                'display_id'    => new Field(
                                        (new NumberValidator())
                                            ->setInteger()
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(10), false),
                'screen_size'   => new Field(
                                        (new NumberValidator())
                                            ->setUnsigned()
                                            ->setMaxIntegerDigits(3)
                                            ->setMaxDecimalDigits(1)
                                            ->setMin(1)
                                            ->setMax(200)),
                'resolution'    => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(20)
                                            ->setRegex("#^[1-9][0-9]{1,3}x[1-9][0-9]{1,3}$#")), 
                'is_touchscreen'     => new Field(new BitValidator())                                                                                    
            ];
        }

    }