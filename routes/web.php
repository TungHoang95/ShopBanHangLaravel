<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Xây dựng project
// Route phần fontent
Route::get('','Frontent\IndexController@getIndex');
Route::get('about.html','Frontent\IndexController@getAbout');

Route::get('contact.html','Frontent\IndexController@getContact');
Route::post('contact.html','Backend\ContactController@postContact');

Route::get('{slug_cate}.html','Frontent\IndexController@getPrdCate');
Route::get('filter','Frontent\IndexController@getFilter');

// product - Show sản phẩm
Route::group(['prefix' => 'product'],function(){
     Route::get('{slug_prd}.html','Frontent\ProductController@getDetail');
     Route::get('shop','Frontent\ProductController@getShop');
});
// checkout - Thanh toán
Route::group(['prefix' => 'checkout'],function(){
     Route::get('','Frontent\CheckoutController@getCheckout');
     Route::post('','Frontent\CheckoutController@postCheckout');

     Route::get('complete/{order_id}','Frontent\CheckoutController@getComplete');
});
//cart - Giỏ hàng
Route::group(['prefix' => 'cart'],function(){
     Route::get('','Frontent\CartController@getCart');
     Route::get('add','Frontent\CartController@getAddCart');
     Route::get('update/{rowId}/{qty}','Frontent\CartController@getUpdateCart');
     Route::get('del/{rowId}','Frontent\CartController@DelCart');
});



// route phần backent
Route::get('login','Backend\LoginController@getLogin')->middleware('CheckLogout');
Route::post('login','Backend\LoginController@postLogin');
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'],function(){
    Route::get('','Backend\IndexController@getIndex');
    Route::get('logout','Backend\IndexController@Logout');

// user - Quản lý thành viên

	Route::group(['prefix' => 'user'],function(){
		 Route::get('','Backend\UserController@getListUser');

		 Route::get('add','Backend\UserController@getAddUser');
		 Route::post('add','Backend\UserController@postAddUser');

		 Route::get('edit/{id_user}','Backend\UserController@getEditUser');
		 Route::post('edit/{id_user}','Backend\UserController@postEditUser');

		 Route::get('delete/{id_user}','Backend\UserController@getDelete');

	});

// category - Danh mục

	Route::group(['prefix' => 'category'],function(){
         Route::get('','Backend\CategoryController@getCategory');
         Route::post('','Backend\CategoryController@postCategory');

         Route::get('edit/{id_category}','Backend\CategoryController@getEditCategory');
         Route::post('edit/{id_category}','Backend\CategoryController@postEditCategory');

         Route::get('delete/{id_category}','Backend\CategoryController@DeleteCategory');

	});

// product - Sản phẩm

		Route::group(['prefix' => 'product'],function(){
		 Route::get('','Backend\ProductController@getProduct');

         Route::get('add','Backend\ProductController@getAddProduct');
         Route::post('add','Backend\ProductController@postAddProduct');

         Route::get('edit/{id_product}','Backend\ProductController@getEditProduct');
         Route::post('edit/{id_product}','Backend\ProductController@postEditProduct');

         Route::get('delete/{id_product}','Backend\ProductController@getDelete');
	});
// order - Đơn hàng

	Route::group(['prefix' => 'order'],function(){
		 Route::get('','Backend\OrderController@getOrder');

         Route::get('detail/{order_id}','Backend\OrderController@getDetailOrder');
         Route::get('paid/{order_id}','Backend\OrderController@getPaid');

         Route::get('processed','Backend\OrderController@getProcessed');
    });
// inforcompany - Thông tin công ty

    Route::group(['prefix' => 'inforcompany'],function(){
        Route::get('','Backend\InforCompanyController@getList');
        Route::get('update/{id}','Backend\InforCompanyController@getUpdate');
        Route::post('update/{id}','Backend\InforCompanyController@postUpdate');
});

// Introduce - Giới thiệu công ty

    Route::group(['prefix' => 'about'],function(){
        Route::get('','Backend\AboutController@getList');
        Route::get('update/{id}','Backend\AboutController@getUpdate');
        Route::post('update/{id}','Backend\AboutController@postUpdate');

    });
// Contact - Liên hệ

    Route::group(['prefix' => 'contact'],function(){
         Route::get('','Backend\ContactController@getListContact');

         Route::get('xuly/{id}','Backend\ContactController@getXuLy')->name('xu.ly');

         Route::get('processed','Backend\ContactController@getProcessed')->name('processed');

    });

});











