<?php

require_once __DIR__ . "/Helpers/Request.php";
require_once __DIR__ . "/Helpers/Session.php";

abstract class Controller
{
    /**
     * Method of request, GET or POST.
     *
     * @var string
     */
    protected $method;

    /**
     * The request instance.
     *
     * @var \App\Core\Helpers\Request
     */
    protected $request;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->request = new Request();
    }

    /**
     * Get array of default variable for template.
     *
     * @return array
     */
    private function getDefaultExtraVariable()
    {
        return [
            'request' => $this->request,
            'error' => Session::getError(),
            'success' => Session::getSuccess(),
        ];
    }

    /**
     * Redirect to URL location.
     *
     * @param string $location
     * @return void 
     */
    protected function redirect($location)
    {
        header("Location: $location");
    }

    /**
     * Declare variables and render the HTML file.
     *
     * @param string $file Filename in app/Views folder
     * @param array $extra
     * @return void
     */
    protected function render($file, $extra = [])
    {
        // So that the Auth class can be used in views.
        require_once __DIR__ . "/Helpers/Auth.php";

        $extraVariables = array_merge($this->getDefaultExtraVariable(), $extra);

        foreach ($extraVariables as $key => $value) {
            ${$key} = $value;
        }

        require __DIR__ . "/../Views/$file";
    }
}
