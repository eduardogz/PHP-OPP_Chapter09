<?php

require_once('allSettings.php');

class AppConfig {
	private static $instance;
	private $commsManager;
	
	private function __construct(){
		$this->init();
	}
	
	private function init(){
		switch ( Settings::$COMMTYPE ) {
			case 'Mega':
				$this->commsManager = new MegaCommsManager();
				break;
			default:
				$this->commsManager = new BloggsCommsManager();
				break;
		}
	}
	
	public static function getInstance() {
		if (empty ( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function getCommsManager() {
		return $this->commsManager;
	}
}

$commManager = AppConfig::getInstance()->getCommsManager();
$commManager->getApptEncoder()->encode();

?>