<?php
class Libs_View{
	public function __construct(){

	}

	public function render($name, $inc = true){
		if($inc){
			include_once 'views/header.php';
			include_once 'views/'.$name.'.php';
			include_once 'views/footer.php';
		}
		else{
			include_once 'views/'.$name.'.php';
		}
	}
}