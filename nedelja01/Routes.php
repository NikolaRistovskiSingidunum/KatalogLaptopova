<?php
    use App\Core\Route;

    return [
        Route::get('#^user/register/?$#',                  'Main',         'getRegister'),
        Route::post('#^user/register/?$#',                 'Main',         'postRegister'),
        Route::get('#^user/login/?$#',                     'Main',         'loginGet'),
        Route::post('#^user/login/?$#',                    'Main',         'loginPost'),
    
        Route::get('|^user/dashboard/?$|',                 'UserDashboard', 'index'),
    
        Route::get('#^categories/?$#',                     'Main',         'home'),
        Route::get('|^category/([0-9]+)/?$|',              'Main',         'showCategoryAuctions'),
        Route::get('#^auction/([0-9]+)/?$#',               'Auction',      'show'),
        Route::post('|^search/?$|',                        'Auction',      'postSearch'),
    
        Route::get('#^api/categories/?$#',                 'MainApi',      'categories'),
        Route::get('#^api/auctions/([0-9]+)/?$#',          'MainApi',      'auctions'),
        Route::get('#^api/bookmarks/?$#',                  'BookmarkApi',  'getBookmarks'),
        Route::get('#^api/bookmarks/add/([0-9]+)/?$#',     'BookmarkApi',  'addBookmark'),
        Route::get('#^api/bookmarks/clear/?$#',            'BookmarkApi',  'clear'),
    
        Route::get('#^user/categories/?$#',                'UserCategoryManagement', 'categories'),
        Route::get('#^user/categories/add/?$#',            'UserCategoryManagement', 'getAdd'),
        Route::post('#^user/categories/add/?$#',           'UserCategoryManagement', 'postAdd'),
        Route::get('#^user/categories/edit/([0-9]+)/?$#',  'UserCategoryManagement', 'getEdit'),
        Route::post('#^user/categories/edit/([0-9]+)/?$#', 'UserCategoryManagement', 'postEdit'),

        Route::get('#^user/auctions/add/?$#',              'UserAuctionManagement', 'getAdd'),
        Route::post('#^user/auctions/add/?$#',             'UserAuctionManagement', 'postAdd'),
        Route::get('#^user/auctions/edit/([0-9]+)/?$#',    'UserAuctionManagement', 'getEdit'),
        Route::post('#^user/auctions/edit/([0-9]+)/?$#',   'UserAuctionManagement', 'postEdit'),

        Route::get('#^laptop/getBasicInformations/([0-9]+)/?$#',     'Laptop',  'getBasicInformations'),
        Route::get('#^laptop/getAllInformations/([0-9]+)/?$#',     'Laptop',  'getAllInformations'),
        Route::get('#^laptop/getAllLaptopsByCategoryName/([A-Za-z0-9_]+)/?$#',     'Laptop',  'getAllLaptopsByCategoryName'),
        Route::get('#^laptop/getAllLaptopsByCategoryId/([0-9]+|All)/?$#',     'Laptop',  'getAllLaptopsByCategoryId'),
        Route::get('#^laptop/getShowFilters/?$#',     'Laptop',  'getShowFilters'),
        Route::post('#^laptop/postAllLaptopsByFilters/?$#',     'Laptop',  'postAllLaptopsByFilters'),
        Route::get('#^laptop/getAllLaptopsSortedByPrice/(DESC|ASC)/?$#',     'Laptop',  'getAllLaptopsSortedByPrice'),
        Route::get('#^category1/getAllCategories/?$#',     'Category',  'getAllCategories'),
        Route::get('#^login/getLogin/?$#',     'Login',  'getLogin'),
        Route::post('#^login/postLogin/?$#',     'Login',  'postLogin'),
        Route::get('#^admin/getAdminDashboard/?$#',     'Admin',  'getAdminDashboard'),   
        Route::get('#^admin/unlogAdmin/?$#',     'Admin',  'unlogAdmin'),
        Route::get('#^admin/categories/?$#',                'AdminCategoryManagement', 'categories'),
        Route::get('#^admin/categories/add/?$#',            'AdminCategoryManagement', 'getAdd'),
        Route::post('#^admin/categories/add/?$#',           'AdminCategoryManagement', 'postAdd'),
        Route::get('#^admin/categories/edit/([0-9]+)/?$#',  'AdminCategoryManagement', 'getEdit'),
        Route::post('#^admin/categories/edit/([0-9]+)/?$#', 'AdminCategoryManagement', 'postEdit'),
        Route::get('#^admin/categories/delete/([0-9]+)/?$#', 'AdminCategoryManagement', 'getDelete'),
        Route::get('#^laptop/getAllLaptops/?$#',     'Laptop',  'getAllLaptops'),
        Route::get('#^adminLaptopManagement/getEdit/([0-9]+)/?$#',     'AdminLaptopManagement',  'getEdit'),
        Route::post('#^adminLaptopManagement/postEdit/([0-9]+)/?$#',     'AdminLaptopManagement',  'postEdit'),
        Route::get('#^adminLaptopManagement/getAdd/?$#',     'AdminLaptopManagement',  'getAdd'),
        Route::post('#^adminLaptopManagement/postAdd/?$#',     'AdminLaptopManagement',  'postAdd'),
        Route::get('#^adminLaptopManagement/deleteById/([0-9]+)/?$#',     'AdminLaptopManagement',  'deleteById'),
        Route::get('#^adminStorageManagement/getStoragies/([0-9]+)/?$#',     'AdminStorageManagement',  'getStoragies'),
        Route::get('#^adminStorageManagement/getAdd/([0-9]+)/?$#',     'AdminStorageManagement',  'getAdd'),
        Route::post('#^adminStorageManagement/postAdd/([0-9]+)/?$#',     'AdminStorageManagement',  'postAdd'),
        Route::get('#^adminStorageManagement/deleteById/([0-9]+)/?$#',     'AdminStorageManagement',  'deleteById'),
        Route::get('#^adminStorageManagement/getEdit/([0-9]+)/?$#',     'AdminStorageManagement',  'getEdit'),
        Route::post('#^adminStorageManagement/postEdit/([0-9]+)/?$#',     'AdminStorageManagement',  'postEdit'),

        //gpus
        Route::get('#^adminGpuManagement/getGpus/?$#',     'AdminGpuManagement',  'getGpus'),
        Route::get('#^adminGpuManagement/deleteById/([0-9]+)/?$#',     'AdminGpuManagement',  'deleteById'),
        Route::get('#^adminGpuManagement/getAdd/?$#',     'AdminGpuManagement',  'getAdd'),
        Route::post('#^adminGpuManagement/postAdd/?$#',     'AdminGpuManagement',  'postAdd'),
        Route::get('#^adminGpuManagement/getEdit/([0-9]+)/?$#',     'AdminGpuManagement',  'getEdit'),
        Route::post('#^adminGpuManagement/postEdit/([0-9]+)/?$#',     'AdminGpuManagement',  'postEdit'),

        //cpus
        Route::get('#^adminCpuManagement/getCpus/?$#',     'AdminCpuManagement',  'getCpus'),
        Route::get('#^adminCpuManagement/deleteById/([0-9]+)/?$#',     'AdminCpuManagement',  'deleteById'),
        Route::get('#^adminCpuManagement/getAdd/?$#',     'AdminCpuManagement',  'getAdd'),
        Route::post('#^adminCpuManagement/postAdd/?$#',     'AdminCpuManagement',  'postAdd'),
        Route::get('#^adminCpuManagement/getEdit/([0-9]+)/?$#',     'AdminCpuManagement',  'getEdit'),
        Route::post('#^adminCpuManagement/postEdit/([0-9]+)/?$#',     'AdminCpuManagement',  'postEdit'),

        //ports
        Route::get('#^adminPortManagement/getPorts/([0-9]+)/?$#',     'AdminPortManagement',  'getPorts'),
        Route::get('#^adminPortManagement/deleteById/([0-9]+)/?$#',     'AdminPortManagement',  'deleteById'),
        Route::get('#^adminPortManagement/getAdd/([0-9]+)/?$#',     'AdminPortManagement',  'getAdd'),
        Route::post('#^adminPortManagement/postAdd/([0-9]+)/?$#',     'AdminPortManagement',  'postAdd'),
        Route::get('#^adminPortManagement/getEdit/([0-9]+)/?$#',     'AdminPortManagement',  'getEdit'),
        Route::post('#^adminPortManagement/postEdit/([0-9]+)/?$#',     'AdminPortManagement',  'postEdit'),


        //display
        Route::get('#^adminDisplayManagement/getDisplays/?$#',     'AdminDisplayManagement',  'getDisplays'),
        Route::get('#^adminDisplayManagement/getAdd/?$#',     'AdminDisplayManagement',  'getAdd'),
        Route::post('#^adminDisplayManagement/postAdd/?$#',     'AdminDisplayManagement',  'postAdd'),
        Route::get('#^adminDisplayManagement/getEdit/([0-9]+)/?$#',     'AdminDisplayManagement',  'getEdit'),
        Route::post('#^adminDisplayManagement/postEdit/([0-9]+)/?$#',     'AdminDisplayManagement',  'postEdit'),
        Route::get('#^adminDisplayManagement/deleteById/([0-9]+)/?$#',     'AdminDisplayManagement',  'deleteById'),
        # Fallback
        Route::get('#^.*$#', 'Main', 'home')
    ];
