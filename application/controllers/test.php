<?php declare(strict_types=1);

class test extends Controller {
  use BasicWebpage;
  
  /**
   * Overrides the trait BasicWebpage's index function with this custom one.
   */
	public static function index() {
	  global $config;
	  $template = Load::view('view.'.__CLASS__);
	  $template = self::commonTemplateVars($template);
	  
	  /*
	   * Loads an instance of the controller "json". We can now use its private 
	   * methods as shown below.
	   */
	  $json = Load::controller('json');
	  $template->set('data',$json->generateData('testing'));
	  
	  $template->render();
	}
	
	public static function redirectme() {
	  parent::redirect('');
	}
}

?>
