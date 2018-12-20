<?php
  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("ADMIN_PATH", dirname(__FILE__));             //  Admin/
  define("PROJECT_PATH", dirname(ADMIN_PATH));         //  pinkfloyd_discography/
  define("PUBLIC_PATH", PROJECT_PATH . '/public');     //  public/
  define("INCLUDES_PATH", PROJECT_PATH . '/Includes'); //  Includes/

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/untamableworld/PinkFloydRedesign/');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_FILENAME'], '/pinkfloyd_discography') + 0;
  $doc_root = substr($_SERVER['SCRIPT_FILENAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');
  require_once('connection.php');
  require_once('query_functions.php');

 $conn = dbconnect('read', 'mysqli');

?>
