<?php
namespace App\Controllers;

use App\Core\ApiController;
use App\Models\CategoryModel;

class CategoryApiController extends ApiController {
    public function categories() {
        //die("aaaaaaaaaaaaa");

        $categoryModel = new CategoryModel($this->getDatabaseConnection());
        $categoryItems = $categoryModel->getAll();

        $this->set('categories', $categoryItems);


        
    }

}