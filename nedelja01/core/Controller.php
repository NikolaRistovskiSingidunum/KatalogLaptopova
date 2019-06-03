<?php
    namespace App\Core;

use App\Core\Session\Session;

class Controller {
        private $dbc;
        private $data = [];
        private $localSession;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function setSession(Session &$session) {
            $this->localSession = $session;
        }

        public function &getSession(): Session {
            return $this->localSession;
        }

        protected function &getDatabaseConnection() {
            return $this->dbc;
        }

        protected function set(string $name, $value) {
            if (\preg_match('/^[a-z][A-z0-9]*$/', $name)) {
                $this->data[$name] = $value;
            }
        }

        public function &getData() {
            return $this->data;
        }

        public function __pre() {
            
        }
        public function setData(& $newData)
        {
            $this->data = $newData;
        }
        //gleda da li su min i max u ispravnom opsegu
        //ovo mozda treba da bude pomereno u util klasa
        protected function clampMinMax(&$min,&$max)
        {
            if($min==="" || $max==="")
            return false;
    
            if($min>=$max)
            $min=0;
    
            if($max<=0)
            return false;
    
            return true;
        }
    }
