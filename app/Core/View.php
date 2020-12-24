<?php

require __DIR__ . "/Helpers/Session.php";
require __DIR__ . "/Helpers/Request.php";

abstract class View
{
    /**
     * Method of request, GET or POST.
     *
     * @var string
     */
    protected $method;

    /**
     * The request instance
     *
     * @var \Core\Helpers\Request
     */
    protected $request;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->request = new Request();

        $this->handle();
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
     * Select whether to enter the GET or POST method.
     *
     * @return void
     */
    private function handle()
    {
        switch ($this->method) {
            case "POST":
                $this->post();
                break;
            default:
                $this->get();
                break;
        }
    }

    /**
     * Function to be called when the GET method occurs.
     * 
     * @return void
     */
    abstract protected function get();

    /**
     * Function to be called when the POST method occurs.
     *
     * @return void
     */
    abstract protected function post();

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
     * @param string $file Filename in Templates folder
     * @param array $extra
     * @return void
     */
    protected function render($file, $extra = [])
    {
        $extraVariables = array_merge($this->getDefaultExtraVariable(), $extra);

        foreach ($extraVariables as $key => $value) {
            ${$key} = $value;
        }

        require __DIR__ . "/../Templates/$file";
    }

    /**
     * Show http 404 not found page.
     *
     * @return void
     */
    protected function notFound()
    {
        $this->render("404.php");
    }
}
