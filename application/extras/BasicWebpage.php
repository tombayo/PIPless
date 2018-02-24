<?php declare(strict_types=1);

/**
 * A trait used to define a basic controller.
 *
 * A trait that loads the view "view.classname.php" and supplies the view with some basic variables.
 * Used by controllers that only displays a standard index-view with no other logic.
 * Should NOT be used by classes that don't extend Controller
 *
 * @author Tom Andre Munkhaug <me@tombayo.com>
 * @package pipless
 * @subpackage traits
 */
trait BasicWebpage {

  /**
   * Loads the view "view.classname.php", supplies some basic variables, and renders the view.
   */
  public static function index() {
    $template = Load::view('view.'.__CLASS__);
    $template = self::commonTemplateVars($template);
    $template->render();
  }
  
  private static function commonTemplateVars(View $view):View {
    global $config;
  
    $view->set('controller', __CLASS__);
    $view->set('lang', $config['language']);
    $view->set('url', function ($controller,$method='',$get=[]) {
      return parent::createUrl($controller,$method,$get);
    });
  
    return $view;
  }
}
