<?php
    use App\Core\Route;

    return [

        //postoje odredjene limitacjie, ako zelimo da koristimo isti view za dva kontroler metoda,
        //tj ispisati sve iz baze i ispisati sve u kategoriji je isto sto se viewa tice,
        //trenutno bzv dupliramo kod
        //kontroler method i view su 1-1, a bilo bi bolje da su Mnogo-1 obrazac
        Route::get('#^categories/?$#',                 'Main',         'home'),
        Route::get('|^category/([0-9]+)/?$|',          'Main',         'showCategoryAuctions'),
        Route::get('#^auction/([0-9]+)/?$#',           'Auction',      'show'),
        Route::get('#^laptop/?$#',           'Laptop',      'show'),
        Route::get('#^laptop/([a-zA-Z_\.]+)/([0-9]+)/?$#',           'Laptop',      'showByCategory'),

        Route::get('#^api/categories/?$#',             'MainApi',      'categories'),
        Route::get('#^api/auctions/([0-9]+)/?$#',      'MainApi',      'auctions'),
        Route::get('#^api/bookmarks/?$#',              'BookmarkApi',  'getBookmarks'),
        Route::get('#^api/bookmarks/add/([0-9]+)/?$#', 'BookmarkApi',  'addBookmark'),
        Route::get('#^api/bookmarks/clear/?$#',        'BookmarkApi',  'clear'),
        Route::get('#^api/details/([0-9]+)/?$#',           'DetailApi',      'details'),
        Route::get('#^api/categories/?$#',           'CategoryApi',      'categories'),

        # Za testiranje funkcionalnosti
        Route::get('#^test/?$#',                       'Main',         'test'),
        Route::get('#^login/?$#',                      'Main',         'loginGet'),
        Route::post('#^login/?$#',                     'Main',         'loginPost'),

        # Fallback
        
        Route::get('#^.*$#', 'Main', 'home') //test
    ];
