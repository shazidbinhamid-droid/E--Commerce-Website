<?php

// Define Application Routes

// Public Routes
$router->add('GET', '/', 'HomeController', 'index');
$router->add('GET', '/product/{id}', 'ProductController', 'show');
$router->add('GET', '/cart', 'CartController', 'index');
$router->add('POST', '/cart/add', 'CartController', 'add');

// Auth Routes
$router->add('GET', '/login', 'AuthController', 'login');
$router->add('POST', '/login', 'AuthController', 'loginPost');
$router->add('GET', '/register', 'AuthController', 'register');
$router->add('POST', '/register', 'AuthController', 'registerPost');
$router->add('GET', '/logout', 'AuthController', 'logout');

// User Routes
$router->add('GET', '/profile', 'UserController', 'profile');

// Admin Routes
$router->add('GET', '/admin', 'AdminController', 'index');

