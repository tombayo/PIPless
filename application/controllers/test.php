<?php declare(strict_types=1);

class Test extends Controller {
	public static function index() {
	  global $config;
	  $template = Load::view('view.'.__CLASS__);
	  $template->set('controller', __CLASS__);
	  $template->set('lang', $config['language']);
	  
	  $json = Load::controller('json');
	  $template->set('data',$json->generateData('testing'));
	  
	  $template->render();
	}
	public static function redirectme() {
	  parent::redirect('');
	}
}

?>
