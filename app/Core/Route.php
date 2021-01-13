<?php

require_once __DIR__ . "/Contracts/Bootable.php";
require_once __DIR__ . "/Contracts/Route.php";
require_once __DIR__ . "/Helpers/Auth.php";

class Route implements Bootable, RouteImp
{
    /**
     * The path to the "login" route for the application. This is used by
     * isValidAccess method to redirect if the user has not already logged in.
     *
     * @var string
     */
    public const LOGIN_PATH = "/login";

    /**
     * The path to the "home" route for the application. This is used by
     * isValidAccess method to redirect if the user has already logged in.
     *
     * @var string
     */
    public const HOME_PATH = "/tire-patches";

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
        $this->currentPath = trim(isset($_GET["path"]) ? $_GET["path"] : $_SERVER["PATH_INFO"], "/");
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

        if ($route === null) {
            http_response_code(404);
            return;
        }

        if ($this->isValidAccessType($route)) {
            $this->callController($route["controller"]);
            return;
        }

        if ($route["authenticated"]) {
            $this->redirect(Route::LOGIN_PATH);
        } else {
            $this->redirect(Route::HOME_PATH);
        }
    }

    /**
     * Check whether the route is authentically accessible, guest only, or both.
     *
     * @param array $route
     * @return boolean
     */
    private function isValidAccessType($route)
    {
        if ($route["authenticated"]) {
            return Auth::check();
        } else if ($route["guest"]) {
            return !Auth::check();
        }

        return true;
    }

    /**
     * Redirect to URL location.
     *
     * @param string $location
     * @return void
     */
    private function redirect($location)
    {
        Header("Location: " . BASE_URL . $location);
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
            "authenticated" => false,
            "guest" => false,
        ];
    }

    /**
     * Register GET method.
     *
     * @param string $path
     * @param string $controller
     * @return $this
     */
    public function get($path, $controller)
    {
        $this->registerRoute("GET", $path, $controller);
        return $this;
    }

    /**
     * Register POST method.
     *
     * @param string $path
     * @param string $controller
     * @return $this
     */
    public function post($path, $controller)
    {
        $this->registerRoute("POST", $path, $controller);
        return $this;
    }

    /**
     * Specifies that the route is only accessible when the user is logged in.
     *
     * @return void
     */
    public function authenticated()
    {
        $lastIndex = array_key_last($this->routes);
        $this->routes[$lastIndex]["authenticated"] = true;
    }

    /**
     * 
     *
     * @return void
     */
    public function guest()
    {
        $lastIndex = array_key_last($this->routes);
        $this->routes[$lastIndex]["guest"] = true;
    }
}
