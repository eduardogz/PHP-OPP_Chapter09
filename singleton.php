<?php

class Preferences {
	private $props = array();
	private static $instance;
	
	private function __construct(){}
	
	public static function getInstance(){
		if (empty( self::$instance)){
			self::$instance = new Preferences();
		}
		return self::$instance;
	}
	
	public static function emptyInstance() {
		self::$instance->props = array();
	}
	
	public function setProperty($key, $val){
		$this->props[$key]=$val;
	}
	
	public function getProperty($key){
		return $this->props[$key];
	}
}

$pref = Preferences::getInstance();
$pref->setProperty("name","edu");
unset($pref);

$pref2 = Preferences::getInstance();
print $pref2->getProperty("name")."<br>";
//$pref2->emptyInstance();
unset($pref2);

$pref3 = Preferences::getInstance();
print $pref3->getProperty("name");

?>