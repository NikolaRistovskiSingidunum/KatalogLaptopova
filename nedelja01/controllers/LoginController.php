<?php
namespace App\Controllers;


use App\Core\Controller;
use App\Models\LaptopModel;
use App\Models\CategoryModel;
use App\Models\StorageModel;
use App\Models\PortModel;
use App\Models\AdminModel;

class LoginController extends Controller {

    public function postLogin() {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $adminModel = new AdminModel($this->getDatabaseConnection());

        $admin = $adminModel->getByFieldName('username', $username);

        //die(\password_hash($password,PASSWORD_DEFAULT). "      " .$admin->password);

        if (!$admin) {
            sleep(1);
            $this->set('message', "Losi podaci ime!");
            return;
        }
        
        if (!password_verify($password, $admin->password)) {
            sleep(1);
            $this->set('message', "Losi podaci! sifra");
            return;
        }

        $this->getSession()->put('userId', $admin->admin_id);

        //die("spesno logovanje");
        \ob_clean();
        header('Location: ' . BASE . 'admin/getAdminDashboard/');
        exit;
    }
    public function getLogin()
    {

    }
}