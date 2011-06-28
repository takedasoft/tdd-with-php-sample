<?php
require_once("WikiEngine.php");

class WikiEngineImpl implements WikiEngine{
  
  const HEADER_PATTERN = "^(=+) .* (=+)$";
  
  function toHtml($input){
    if( $input == null ) throw new InvalidArgumentException();
    if( mb_ereg( WikiEngineImpl::HEADER_PATTERN, $input, $match) ) {
      $start = $match[1];
      $end = $match[2];
      if ( strlen( $start ) == strlen( $end ) ) {
        $level = strlen( $start );
        $body = substr( $input, $level + 1, strlen( $input ) - ($level+1)*2 );
        return "<h" . $level . ">" . $body . "</h" . $level . ">";
      }
    }
    return $input;
  }
}
?>
