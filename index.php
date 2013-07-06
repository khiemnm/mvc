<?php
include_once 'configs/db.php';
include_once 'configs/path.php';
function _autoLoad($class){
	$file = strtolower(str_replace("_", "/", $class)).'.php';
	include_once "$file";
}

new Libs_Bootstrap();