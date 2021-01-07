<?php

require_once __DIR__ . "/Contracts/Bootable.php";

class Route implements Bootable
{
    /**
     * Path of current location.
     *
     * @var string
     */
    private $currentPath;

    /**
     * Method of request, GET or POST.
     *
     * @var string
     */
    private $httpMethod;

    /**
     * List of routes.
     *
     * @var array
     */
    private $routes = [];

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->httpMethod = $_SERVER["REQUEST_METHOD"];
        $this->currentPath = trim($_SERVER["PATH_INFO"] ?? $_GET["path"], "/");
    }

    /**
     * The method that will be called in the `Application` class.
     *
     * @return void
     */
    public function boot()
    {
        $this->handle();
    }

    /**
     * Call controller method from string.
     *
     * @param string $controllerString
     * @return void
     */
    private function callController($controllerString)
    {
        [$controller, $method] = explode("@", $controllerString);

        require __DIR__ . "/../Controllers/" . $controller . ".php";

        $controller = new $controller();
        $controller->{$method}();
    }

    /**
     * Get the route data according to the method and the path.
     *
     * @return array
     */
    private function getSelectedRoute()
    {
        foreach ($this->routes as $route) {
            if ($this->httpMethod === $route["method"] && $this->currentPath === $route["path"]) {
                return $route;
            }
        }

        return null;
    }

    /**
     * Handles the process of selecting the appropriate route and executing the
     * associated controllers.
     *
     * @return void
     */
    private function handle()
    {
        $route = $this->getSelectedRoute();

        if ($route !== null) {
            $this->callController($route["controller"]);
            return;
        }

        http_response_code(404);
    }

    /**
     * Register a route.
     *
     * @param string $method
     * @param string $path
     * @param string $controller
     * @return void
     */
    private function registerRoute($method, $path, $controller)
    {
        $trimmedPath = trim($path, "/");

        $this->routes[] = [
            "method" => $method,
            "path" => $trimmedPath,
            "controller" => $controller,
            "middleware" => null,
        ];
    }

    /**
     * Register GET method.
     *
     * @param string $path
     * @param string $controller
     * @return void
     */
    public function get($path, $controller)
    {
        $this->registerRoute("GET", $path, $controller);
    }

    /**
     * Register POST method.
     *
     * @param string $path
     * @param string $controller
     * @return void
     */
    public function post($path, $controller)
    {
        $this->registerRoute("POST", $path, $controller);
    }
}
