<?php
/** @var App\Core\Router $router */

// روت‌های بخش مشتری (Frontend)
$router->get('/', 'App\Controllers\Frontend\HomeController@index');
$router->get('/products', 'App\Controllers\Frontend\ProductController@index');

// روت‌های بخش مدیریت (Admin)
$router->get('/admin/categories', 'App\Controllers\Admin\CategoryController@index');
$router->post('/admin/categories/store', 'App\Controllers\Admin\CategoryController@store');
$router->get('/admin/categories/delete/{id}', 'App\Controllers\Admin\CategoryController@delete');


// روت‌های محصولات (اضافه شده)
$router->get('/admin/products', 'App\Controllers\Admin\ProductController@index');
$router->get('/admin/products/create', 'App\Controllers\Admin\ProductController@create');
$router->post('/admin/products/store', 'App\Controllers\Admin\ProductController@store');
$router->get('/admin/products/delete/{id}', 'App\Controllers\Admin\ProductController@delete');