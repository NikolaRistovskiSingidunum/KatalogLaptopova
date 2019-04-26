<?php
    use App\Core\Route;

    return [
        Route::get('#^categories/?$#',                 'Main',         'home'),
        Route::get('|^category/([0-9]+)/?$|',          'Main',         'showCategoryAuctions'),
        Route::get('#^auction/([0-9]+)/?$#',           'Auction',      'show'),
        Route::get('#^laptop/([0-9]+)/?$#',           'Laptop',      'show'),
        

        Route::get('#^api/categories/?$#',             'MainApi',      'categories'),
        Route::get('#^api/auctions/([0-9]+)/?$#',      'MainApi',      'auctions'),
        Route::get('#^api/bookmarks/?$#',              'BookmarkApi',  'getBookmarks'),
        Route::get('#^api/bookmarks/add/([0-9]+)/?$#', 'BookmarkApi',  'addBookmark'),
        Route::get('#^api/bookmarks/clear/?$#',        'BookmarkApi',  'clear'),
        Route::get('#^api/details/([0-9]+)/?$#',           'DetailApi',      'details'),

        # Za testiranje funkcionalnosti
        Route::get('#^test/?$#',                       'Main',         'test'),
        Route::get('#^login/?$#',                      'Main',         'loginGet'),
        Route::post('#^login/?$#',                     'Main',         'loginPost'),

        # Fallback
        
        Route::get('#^.*$#', 'Main', 'home') //test
    ];
