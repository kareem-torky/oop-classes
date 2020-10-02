<?php

namespace Core;

class App 
{
    private $controller, $action;

    public function __construct($route)
    {
        $this->checkRoute($route);
        $this->render();
    }

    public function checkRoute(Route $route)
    {
        $request = new Request;
        $requested_url = $request->server('QUERY_STRING');
        $requested_method = $request->server('REQUEST_METHOD');
        $all_routes = $route->getRoutingTable();

        foreach ($all_routes as $single_route => $info) {

            if($requested_url == $single_route and $requested_method == $info['method']) {
                $this->controller = $info['controller'];
                $this->action = $info['action'];
                break;
            }
        }
    }

    public function render()
    {
        // add the namespace to the class name
        $controller_name = "App\Controllers\\". $this->controller;

        if(class_exists($controller_name)) {
            $controller_obj = new $controller_name;
            if(method_exists($controller_obj, $this->action)) {
                call_user_func(
                    [$controller_name, $this->action]
                );
            } else {
                die("$this->action not found");
            }
        } else {
            die("$this->controller not found");   
        }
    }
}