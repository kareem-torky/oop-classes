<?php 

namespace Core;

class Route 
{
    // private $routes = [];
    public $routes = [];

    public function get(string $url, string $controller_action)
    {
        $controller_action_arr = explode("@", $controller_action);

        $this->routes[$url] = [
            'method' => 'GET',
            'controller' => $controller_action_arr[0],
            'action' => $controller_action_arr[1],
        ];
    }

    public function post(string $url, string $controller_action)
    {
        $controller_action_arr = explode("@", $controller_action);

        $this->routes[$url] = [
            'method' => 'POST',
            'controller' => $controller_action_arr[0],
            'action' => $controller_action_arr[1],
        ];
    }
}