<?php
function C($name,$method){
	require_once('/libs/controller/'.$name.'Controller.php');
	$controller = $name."Controller";
	$test =new $controller();
	$test->$method();
}