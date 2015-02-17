<?php

abstract class ApptEncoder {
	abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder {
	function encode(){
		return "Appointment data encode in Bloggs Cal format <br>";
	}
}

abstract class CommsManager {
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {
	function getHeaderText() {
		return "Bloggs Cal header<br>";
	}
	
	function getApptEncoder() {
		return new BloggsApptEncoder();
	}
	
	function getFooterText() {
		return "Bloggs Cal footer<br>";
	}
}


$mgr = new BloggsCommsManager();

print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();
?>