<?php
namespace App\Controllers;

use App\Models\AuctionModel;
use App\Core\Controller;
use App\Models\OfferModel;
use App\Models\LaptopModel;
use App\Models\CategoryModel;
use App\Models\StorageModel;
use App\Models\PortModel;
use App\Models\AdminModel;
use App\Controllers\UserDashboardController;
use App\Controllers\LaptopController;
use App\Core\UserController;
class AdminController extends UserController {

    public function getAdminDashboard()
    {

    }
    public function unlogAdmin()
    {
        $this->unlogUser();
                       ob_clean();
                header('Location: ' . BASE . 'login/getLogin', true, 307);
                exit;
    }


}