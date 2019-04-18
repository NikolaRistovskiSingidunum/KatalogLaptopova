<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Core\Controller;
use App\Models\AuctionModel;
use App\Models\UserModel;

class MainController extends Controller {
    public function home() {
        $cm = new CategoryModel($this->getDatabaseConnection());
        $categories = $cm->getAll();
        
        $this->set('categories', $categories);
    }

    public function categoriesSortedById() {
        $cm = new CategoryModel($this->getDatabaseConnection());
        $categories = $cm->getAll();

        usort($categories, function($a, $b) {
            return $b->name <=> $a->name;
        });

        $this->set('categories', $categories);
    }

    public function showCategoryAuctions($categoryId) {
        $am = new AuctionModel($this->getDatabaseConnection());
        $auctions = $am->getAllByCategoryId($categoryId);
        $this->set('auctions', $auctions);

        $cm = new CategoryModel($this->getDatabaseConnection());
        $category = $cm->getById($categoryId);
        $this->set('category', $category);
    }

    public function test() {
        $userId = $this->getSession()->get('userId');

        if ($userId === null) {
            \ob_clean();
            header('Location: /nedelja01/login/');
            exit;
        }

        $brojac = $this->getSession()->get('brojac', 0);
        $brojac++;
        $this->getSession()->put('brojac', $brojac);

        $this->set('message', 'Ulogovani ste! Brojac je: ' . $brojac);
    }

    public function loginGet() {

    }

    public function loginPost() {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if ($username == 'test' && $password == '123456') {
            $this->getSession()->put('userId', 11);

            \ob_clean();
            header('Location: /nedelja01/test/');
            exit;
        }

        sleep(1);
        $this->set('message', 'Losi podaci!');
    }
}
