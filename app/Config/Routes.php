<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', function(){
    return view('landing-page');
});

$routes->get('/home', 'HomeController::index',['as' => 'home']);
$routes->get('/login', 'LoginController::index',['as' => 'login']);

// =>default controller
$routes->get('/dashboard', 'DashboardController::index',['as' => 'dashboard']);

$routes->get('/pet_type', 'PetTypeController::index',['as' => 'pet_type']);
$routes->get('/pet_type/edit/(:num)', 'PetTypeController::edit/$1',['as' => 'pet_type-edit']);
$routes->get('/pet_type/delete/(:num)', 'PetTypeController::delete/$1',['as' => 'pet_type-delete']);
$routes->get('/pet_type/create', 'PetTypeController::create',['as' => 'pet_type-create']);
$routes->post('/pet_type/store', 'PetTypeController::store',['as' => 'pet_type-store']);
$routes->post('/pet_type/update', 'PetTypeController::update',['as' => 'pet_type-update']);


$routes->get('/condition', 'ConditionController::index',['as' => 'condition']);
$routes->get('/condition/edit/(:num)', 'ConditionController::edit/$1',['as' => 'condition-edit']);
$routes->get('/condition/delete/(:num)', 'ConditionController::delete/$1',['as' => 'condition-delete']);
$routes->get('/condition/create', 'ConditionController::create',['as' => 'condition-create']);
$routes->post('/condition/store', 'ConditionController::store',['as' => 'condition-store']);
$routes->post('/condition/update', 'ConditionController::update',['as' => 'condition-update']);


$routes->get('/pet', 'PetController::index',['as' => 'pet']);
$routes->get('/pet/edit/(:num)', 'PetController::edit/$1',['as' => 'pet-edit']);
$routes->get('/pet/delete/(:num)', 'PetController::delete/$1',['as' => 'pet-delete']);
$routes->get('/pet/create', 'PetController::create',['as' => 'pet-create']);
$routes->post('/pet/store', 'PetController::store',['as' => 'pet-store']);
$routes->post('/pet/update', 'PetController::update',['as' => 'pet-update']);


$routes->get('/pet_sales', 'PetSalesController::index',['as' => 'pet_sales']);
$routes->get('/pet_sales/edit/(:num)', 'PetSalesController::edit/$1',['as' => 'pet_sales-edit']);
$routes->get('/pet_sales/delete/(:num)', 'PetSalesController::delete/$1',['as' => 'pet_sales-delete']);
$routes->get('/pet_sales/create', 'PetSalesController::create',['as' => 'pet_sales-create']);
$routes->post('/pet_sales/store', 'PetSalesController::store',['as' => 'pet_sales-store']);
$routes->post('/pe_sales/update', 'PetSalesController::update',['as' => 'pet_sales-update']);


$routes->get('/pet_food', 'PetFoodController::index',['as' => 'pet_food']);
$routes->get('/pet_food/edit/(:num)', 'PetFoodController::edit/$1',['as' => 'pet_food-edit']);
$routes->get('/pet_food/delete/(:num)', 'PetFoodController::delete/$1',['as' => 'pet_food-delete']);
$routes->get('/pet_food/create', 'PetFoodController::create',['as' => 'pet_food-create']);
$routes->post('/pet_food/store', 'PetFoodController::store',['as' => 'pet_food-store']);
$routes->post('/pet_food/update', 'PetFoodController::update',['as' => 'pet_food-update']);