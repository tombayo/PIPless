<?php declare(strict_types=1);

class json extends Controller {
	use JsonController, Objectify;
	
	private static function generateData(string $input):array {
	  $arr = [$input=>[]];
	  for ($i=0;$i<9;$i++) {
	    $arr[$input][] = $i;
	  }
	  return $arr;
	}
}

?>
