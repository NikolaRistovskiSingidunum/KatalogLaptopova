<?php
    namespace App\Validators;

    use App\Core\Validator;

    class EnumValidator implements Validator {
        private $data;



        public function &setData($enums): EnumValidator {
            $this->data = $enums;
            return $this;
        }

        

        public function isValid(string $value) {
    

            return \in_array($value,$this->data);
            // foreach( $data as $enum)
            // {
            //     if ($data === $enum)
            //     return true;
            // }

            // return false;
        }
    }