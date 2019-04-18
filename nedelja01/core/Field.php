<?php
    namespace App\Core;

    class Field {
        private $isEditable;
        private $pattern;

        private function __construct($isEditable, $pattern) {
            $this->isEditable = $isEditable;
            $this->pattern = $pattern;
        }

        public function getPattern() {
            return $this->pattern;
        }

        public function isEditable() {
            return $this->isEditable;
        }

        public function isFieldValueValid($value) {
            return boolval(\preg_match($this->pattern, $value));
        }

        public static function readonlyInteger(int $maxLangth) {
            return new Field(false, '|^[0-9]{1,' . $maxLangth . '}$|');
        }

        public static function editableInteger(int $maxLangth) {
            return new Field(true, '|^[0-9]{1,' . $maxLangth . '}$|');
        }

        public static function editableIpAddress() {
            return new Field(true, '|^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$|');
        }

        public static function readonlyIpAddress() {
            return new Field(false, '|^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$|');
        }

        public static function editableString($minLength, $maxLength) {
            return new Field(true, '|^.{' . $minLength . ',' . $maxLength . '}$|');
        }

        public static function readonlyString($minLength, $maxLength) {
            return new Field(false, '|^.{' . $minLength . ',' . $maxLength . '}$|');
        }

        public static function editableFixedDecimal($length, $decimals) {
            $wholeNumberLenght = $length - $decimals - 1;
            return new Field(true, '|^-?[0-9]{1,' . $wholeNumberLenght . '}\.[0-9]{' . $decimals . '}$|');
        }

        public static function readonlyFixedDecimal($length, $decimals) {
            $wholeNumberLenght = $length - $decimals - 1;
            return new Field(false, '|^-?[0-9]{1,' . $wholeNumberLenght . '}\.[0-9]{' . $decimals . '}$|');
        }

        public static function editableMaxDecimal($length, $maxDecimals) {
            $wholeNumberLenght = $length - $maxDecimals - 1;
            return new Field(true, '|^-?[0-9]{1,' . $wholeNumberLenght . '}\.[0-9]{1,' . $maxDecimals . '}$|');
        }

        public static function readonlyMaxDecimal($length, $maxDecimals) {
            $wholeNumberLenght = $length - $maxDecimals - 1;
            return new Field(false, '|^-?[0-9]{1,' . $wholeNumberLenght . '}\.[0-9]{1,' . $maxDecimals . '}$|');
        }

        public static function editableDateTime() {
            return new Field(true, '|^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|');
        }

        public static function readonlyDateTime() {
            return new Field(false, '|^[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|');
        }

        public static function editableDate() {
            return new Field(true, '|^[0-9]{4}-[0-9]{2}-[0-9]{2}$|');
        }

        public static function readonlyDate() {
            return new Field(false, '|^[0-9]{4}-[0-9]{2}-[0-9]{2}$|');
        }

        public static function editableTime() {
            return new Field(true, '|^[0-9]{2}:[0-9]{2}:[0-9]{2}$|');
        }

        public static function readonlyTime() {
            return new Field(false, '|^[0-9]{2}:[0-9]{2}:[0-9]{2}$|');
        }

        public static function editableBit() {
            return new Field(true, '|^[01]$|');
        }

        public static function readonlyBit() {
            return new Field(false, '|^[01]$|');
        }
    }
