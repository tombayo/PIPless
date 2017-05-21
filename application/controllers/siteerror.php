<?php declare(strict_types=1);
/**
 * The main error-controller. Gets called whenever the application generates errors.
 *
 * @package pipless
 * @subpackage controllers
 *
 * @author Tom Andre Munkhaug <me@tombayo.com>
 */
class siteerror extends Controller {
	
  /**
   * Gets called whenever an error occurs on the webpage.
   * 
   * Handles the errors by calling the appropriate function. The default is 500.
   * 
   * @param Throwable $error
   */
	public static function index(Throwable $error = null) {
	  if (!is_null($error)) {    
  	  switch($error->getCode()) {
  	    case 404:
  	      self::error404($error);
  	      break;
  	    default:
  	      self::error500($error);
  	  }
	  } else {
	    parent::redirect('');
	  }
	}
	
	/**
	 * Deals with a 404 error.
	 * 
	 * @param Throwable $error
	 */
	private static function error404(Throwable $error) {
	  http_response_code(404);
    echo '<h1>404 Error</h1>';
		echo '<p>Looks like this page doesn\'t exist.</p>';
	}
	
	/**
	 * Deals with a 500 error.
	 * 
	 * @param Throwable $error
	 */
	private static function error500(Throwable $error) {
	  global $config;
	  http_response_code(500);
	  echo '<h1>500 Error</h1>';
	  echo '<p>Looks like the server has encountered a problem. Please try again later.</p>';
	  if ($config['report_errors']) echo '<p>' . $error . '</p>';
	}
}
?>
