<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Core\Controller;

use App\Models\OfferModel;
use App\Models\LaptopModel;
use App\Models\StorageModel;
use App\Models\PortModel;

class CategoryController extends Controller {

    public function getAllCategories()
    {
        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();

        $this->set("categories",$categories);
    }
}