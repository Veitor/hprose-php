<?php
    require_once('../Hprose.php');
    function hello($name) {
    	echo "Hello $name!";
		return "Hello $name!";
	}
	function e() {
		throw new Exception("I am Exception");
	}
	$server = new HproseSwooleServer("tcp://0.0.0.0:1504");
	$server->setErrorTypes(E_ALL);
	$server->setDebugEnabled();
	$server->addFunction('hello');
	$server->addFunction('e');
	$server->start();
?>
