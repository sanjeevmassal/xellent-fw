<?php

namespace Xellent\Core\Router;

class RouteFactory {

    public function newRoute($pattern, array $dispatch = array()) {
        return new Route($pattern, $dispatch);
    }

}
