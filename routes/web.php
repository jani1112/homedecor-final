<?php

Route::get('/', function(){
    return view('front.landing',['title' => 'home']);
})->name('homepage');
//individual pages

Route::view('/contact','front.contact',['title' => 'Contact Us'])->name('contact');
Route::view('/checkout','front.checkout',['title' => 'Checkout'])->name('checkout');
Route::view('/cart','front.cart',['title' => 'Cart'])->name('cart');
Route::view('/shop-sidebar','front.shop-sidebar',['title' => 'shop-sidebar'])->name('shop-sidebar');
Route::view('/faq','front.faq',['title' => 'faq'])->name('faq');
Route::view('/singleproduct','front.singleproduct',['title' => 'singleproduct'])->name('singleproduct');

//end

//Front Routes

Route::post('/register',[\App\Http\Controllers\Front\CustomerController::class,'index']);



//Admin Routes
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});


Route::group(['prefix' => 'admin', ], function () {
    Auth::routes(['register' => false]);
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users','UsersController');

    // Product Categories
    Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');
    Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');
    Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');
    Route::resource('product-categories','ProductCategoryController', ['except' => ['show']]);

    // Product Tags
    Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');
    Route::resource('product-tags', 'ProductTagController');

    // Products
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController', ['except' => ['show']]);

    // Sub Categories
    Route::delete('sub-categories/destroy', 'SubCategoriesController@massDestroy')->name('sub-categories.massDestroy');
    Route::post('sub-categories/media', 'SubCategoriesController@storeMedia')->name('sub-categories.storeMedia');
    Route::post('sub-categories/ckmedia', 'SubCategoriesController@storeCKEditorImages')->name('sub-categories.storeCKEditorImages');
    Route::resource('sub-categories', 'SubCategoriesController', ['except' => ['show']]);

    // Featured Products
    Route::delete('featured-products/destroy', 'FeaturedProductsController@massDestroy')->name('featured-products.massDestroy');
    Route::resource('featured-products','FeaturedProductsController');

    //Offer Products
    Route::delete('offer-products/destroy', 'OfferProductsController@massDestroy')->name('offer-products.massDestroy');
    Route::resource('offer-products', 'OfferProductsController');

    // Manage Coupons
    Route::delete('manage-coupons/destroy', 'ManageCouponsController@massDestroy')->name('manage-coupons.massDestroy');
    Route::resource('manage-coupons', 'ManageCouponsController');

    // Feedback Views
    Route::delete('feedback-views/destroy', 'FeedbackViewController@massDestroy')->name('feedback-views.massDestroy');
    Route::resource('feedback-views', 'FeedbackViewController', ['except' => ['create', 'store', 'edit', 'update']]);

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Manage Customers
    Route::resource('manage-customers', 'ManageCustomerController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Reports
    Route::resource('reports', 'ReportsController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Manage Orders
    Route::delete('manage-orders/destroy', 'ManageOrdersController@massDestroy')->name('manage-orders.massDestroy');
    Route::resource('manage-orders', 'ManageOrdersController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
