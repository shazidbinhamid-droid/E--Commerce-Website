<?php

class Router
{
    protected $routes = [];

    public function add($method, $path, $controller, $action)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch($uri)
    {
        $method = $_SERVER['REQUEST_METHOD'];

        // Remove query string
        $uri = parse_url($uri, PHP_URL_PATH);

        // Remove base path if needed (e.g. if installed in a subdirectory like /ecommerce)
        // For XAMPP root, it might be /ecommerce/
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        if ($scriptName !== '/') {
            $uri = str_replace($scriptName, '', $uri);
        }
        $uri = '/' . trim($uri, '/');

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->match($route['path'], $uri, $params)) {
                require_once '../app/controllers/' . $route['controller'] . '.php';
                $controller = new $route['controller']();
                call_user_func_array([$controller, $route['action']], $params);
                return;
            }
        }

        echo "404 Not Found";
    }

    private function match($routePath, $uri, &$params)
    {
        $routeRegex = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $routePath);
        $routeRegex = "#^" . $routeRegex . "$#";

        if (preg_match($routeRegex, $uri, $matches)) {
            array_shift($matches); // Remove full match
            $params = $matches;
            return true;
        }
        return false;
    }
}
