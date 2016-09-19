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
    global $config;
    $template = Load::view('view.'.__CLASS__);
    $template->set('controller', __CLASS__);
    $template->set('lang', $config['language']);
    $template->render();
  }
}
