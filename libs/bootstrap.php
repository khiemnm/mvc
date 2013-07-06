<?
class Libs_Bootstrap{
	public function __construct(){
		$this->delegate();
	}

	public function parseUrl(&$controller, &$action, &$param=null){
		if(isset($_GET['url'])){
			$array_url = explode('/',rtrim($_GET['url'],'/'));
			if(file_exists('controllers/'.$array_url[0])){
				$controller = $array_url[0];
				array_shift($array_url);
			}
			else{
				$controller = "Index";
				$action = "index";	
			}			
			if(isset($array_url[0])){
				$class = 'Controllers_'.$controller;
				if(is_callable(array($class, $array_url[0])))
				{
					$action = $array_url[0];
					array_shift($array_url);
				}else{
					$action = 'index';
				}

				if(count($array_url) > 0)
					$param = $array_url;
			}
			else{
				$action = 'index';
			}
		}
		else{
			$controller = "Index";
			$action = "index";
		}
	}

	public function delegate(){
		$this->parseUrl($controller, $action, $param);
		$class = 'Controllers_'.$controller;
		$controller = new $class();
		$controller->$action();
	}
}