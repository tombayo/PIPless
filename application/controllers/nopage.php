<?php declare(strict_types=1);

class Nopage extends Controller {
	
	public static function index() {
	  self::error404();
	}
	
	private static function error404() {
    echo '<h1>404 Error</h1>';
		echo '<p>Looks like this page doesn\'t exist</p>';
	}
}
?>
