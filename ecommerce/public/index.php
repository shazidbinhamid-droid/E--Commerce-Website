<?php
session_start();

require_once '../app/core/Database.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';

// Load Helper Functions
// require_once '../app/helpers/session_helper.php';

$router = new Router();

// Load Routes
require_once '../routes/web.php';

$router->dispatch($_SERVER['REQUEST_URI']);
