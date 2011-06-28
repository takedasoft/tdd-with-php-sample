<?php
require_once("WikiEngine.php");

class WikiEngineImpl implements WikiEngine{
  function toHtml($input){
    if( $input == null ) throw new InvalidArgumentException();
    if ( strpos($input,"= ") === 0 && strrpos( $input, " =" ) === strlen($input) - 2 ) {
      return "<h1>" . substr( $input, 2, strlen($input)-4 ) . "</h1>";
    }
    return $input;
  }
}
?>
