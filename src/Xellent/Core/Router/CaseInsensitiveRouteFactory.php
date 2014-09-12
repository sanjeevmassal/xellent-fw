<?php

namespace Xellent\Core\Router;

class CaseInsensitiveRouteFactory extends RouteFactory {

    public function newRoute($pattern, array $dispatch = array()) {
        return new CaseInsensitiveRoute($pattern, $dispatch);
    }

}
