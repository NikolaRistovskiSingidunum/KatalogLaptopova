<?php
    namespace App\Core;

    class UserController extends Controller {
        public function __pre() {
            
            if (!$this->getSession()->get('userId', null)) {
                ob_clean();
                header('Location: ' . BASE . 'login/getLogin', true, 307);
                exit;
            }
        }

        public function unlogUser()
        {
           
            $this->getSession()->clear();
        }
    }
