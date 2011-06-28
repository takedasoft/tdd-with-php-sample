<?php
require_once("WikiEngine.php");

class WikiEngineImpl implements WikiEngine{
  function toHtml($input){
    if( $input == null ) throw new InvalidArgumentException();
    return $input;
  }
}
?>
