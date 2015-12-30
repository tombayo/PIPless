<?php

class Main extends Controller {
	
	public static function index() {
		$template = Load::view('main_view');
		$template->render();
	}
    
}

?>
