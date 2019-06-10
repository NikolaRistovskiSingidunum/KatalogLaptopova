<?php
    namespace App\Utils;

    

    class EnumUtils {
        
        public static function getStorageTypes()
        {
            return [0=>'SSD',1=>'HDD'];
        }
        public static function getPortTypes()
        {
            return [0=>'HDMI',1=>'VGA',2=>'DVI',3=>'Video Port',4=>'USB C'];  
        }
        public static function getGPUTypes()
        {
            return [0=>"integrated",1=>"external"];
        }
        public static function getRamTypes()
        {

            return [0=>"DDR2",1=>"DDR3",2=>"DDR4"];
        }
        public static function getKeyboardLayouts()
        {
            return [0=>"UK",1=>"US",2=>"YU"];
        }
    }