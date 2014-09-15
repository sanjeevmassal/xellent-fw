<?php
class ClassLoader{
	
	public function autoload($className){
		echo $className;
		die;
	}
	
}