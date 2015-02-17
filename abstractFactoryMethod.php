<?php

abstract class CommsManager {
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getTtdEncoder();
	abstract function getContactEncoder();
	abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {
	function getHeaderText() {
		return "Bloggs Cal header<br>";
	}

	function getApptEncoder() {
		return new BloggsApptEncoder();
	}
	
	function getTtdEncoder() {
		return new BloggsTtdEncoder();
	}
	
	function getContactEncoder() {
		return new BloggsContactEncoder();
	}

	function getFooterText() {
		return "Bloggs Cal footer<br>";
	}
}

class MegaCommsManager extends CommsManager {
	function getHeaderText() {
		return "Mega Cal header<br>";
	}

	function getApptEncoder() {
		return new BloggsApptEncoder();
	}

	function getTtdEncoder() {
		return new BloggsTtdEncoder();
	}

	function getContactEncoder() {
		return new BloggsContactEncoder();
	}

	function getFooterText() {
		return "Mega Cal footer<br>";
	}
}
?>