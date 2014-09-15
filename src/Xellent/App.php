<?php

namespace  Xellent;

use Xellent\Core\Router\Router;
class App
{
   	private $__router = null;
	public function buildPath(){
		$this->__router = new Router();
	}
	public function iniClassLoader(){
		spl_autoload_register(array('Xellent\Core\ClassLoader','autoload',true,true));
	}
}

