<?php 
namespace App;

class Router {

    private $routes = ['get' => [], 'post' => []];
    // routes that require login.
    // not sure how I'm going to do this yet.
    private $auth = [];
    
    // add a GET route
    public function get($uri, $callback) {
        $this->routes['get'][$uri] = $callback;
    }
    
    // add a POST route
    public function post($uri, $callback) {
        $this->routes['post'][$uri] = $callback;
    }

    // add a group of routes
    // this is obviously not working the way I want. 
    // I may protect routes via main controller?
    public function group($group,$group_routes) {
    	foreach($group_routes as $k => $v) {
    		$this->routes[$k][$v[0]] = $v[1];
    		$this->auth[] = $k;
    	}
    }

    // Dispatch the route based on $_SERVER
    public function dispatch($request) {
        $req_uri = $request['REQUEST_URI']; 
        $req_broken = explode('?', $req_uri);
        $uri = $req_broken[0];
        $method = strtolower($request['REQUEST_METHOD']);

        if(array_key_exists($uri, $this->routes[$method])) { // route and method found. fire method based on saved route
            $this->fire($this->routes[$method][$uri]);
        } else { // no matching route/method. 404
            $this->fire('PagesController@E404');
        }
    }

    // given callback string from route, call controller and method
    private function fire($callable) {
        list($con, $method) = explode('@',$callable);
        $con = 'App\Controller\\' . $con;
        $c = new $con();
        $c->$method();
    }
}