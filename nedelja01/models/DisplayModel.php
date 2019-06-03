<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;
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
                                            ->setMaxDecimalDigits(1)),
                'resolution'    => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(20)), 
                'is_touchscreen'     => new Field(new BitValidator())                                                                                    
            ];
        }

    }