<?php declare(strict_types=1);

class Json extends Controller {
	use JsonController, Objectify;
	
	public static function getdata(string $input) {
	  echo json_encode(self::generateData($input));
	}
	
	private static function generateData(string $input):array {
	  $arr = [$input=>[]];
	  for ($i=0;$i<9;$i++) {
	    $arr[$input][] = $i;
	  }
	  return $arr;
	}
}

?>
