<?php
require_once("WikiEngine.php");

class WikiEngineImpl implements WikiEngine{
  function toHtml($input){
    if( $input == null ) throw new InvalidArgumentException();
    if ( strpos($input,"= ") === 0 && strrpos( $input, " =" ) === strlen($input) - 2 ) {
      return "<h1>" . substr( $input, 2, strlen($input)-4 ) . "</h1>";
    }
    if ( strpos($input,"== ") === 0 && strrpos( $input, " ==" ) === strlen($input) - 3 ) {
      return "<h2>" . substr( $input, 3, strlen($input)-6 ) . "</h2>";
    }
    return $input;
  }
}
?>
