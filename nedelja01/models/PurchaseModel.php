<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;
    use \App\Core\DatabaseConnection;
    use \PDO;

    class AdminModel extends Model {

        protected function getFields() {
            return [
                'purchase_id'        => new Field(
                                    (new NumberValidator())
                                        ->setInteger()
                                        ->setUnsigned()
                                        ->setMaxIntegerDigits(10), false),
                'laptop_id'        => new Field(
                                    (new NumberValidator())
                                        ->setInteger()
                                        ->setUnsigned()
                                        ->setMaxIntegerDigits(10), false),
                'quantity'        => new Field(
                                    (new NumberValidator())
                                        ->setInteger()
                                        ->setUnsigned()
                                        ->setMaxIntegerDigits(10), false),
                'created_at'     => new Field(new DateTimeValidator(), false),
                'forename'       => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(64)),
                'surname'        => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(64)),
                'phone'         => new Field(
                                        (new StringValidator())
                                            ->setMinLength(1)
                                            ->setMaxLength(64))                                          
            ];
        }
    }