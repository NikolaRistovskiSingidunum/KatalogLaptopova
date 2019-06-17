<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\UserModel;
use App\Validators\StringValidator;

class MainController extends Controller {
    public function home() {
        $cm = new CategoryModel($this->getDatabaseConnection());
        $categories = $cm->getAll();
        
        $this->set('categories', $categories);
    }

   
}
