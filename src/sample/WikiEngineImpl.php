<?php
require_once("WikiEngine.php");

class WikiEngineImpl implements WikiEngine{
  
  const HEADER_PATTERN = "^(=+) .* (=+)$";
  const HEADER_MAX_LEVEL = 6;

  function toHtml($input){
    if( $input == null ) throw new InvalidArgumentException();
    if( mb_ereg( WikiEngineImpl::HEADER_PATTERN, $input, $match) ) {
      $start = $match[1];
      $end = $match[2];
      $level = strlen( $start );
      if ( $level <= WikiEngineImpl::HEADER_MAX_LEVEL && $level == strlen( $end ) ) {
        $body = substr( $input, $level + 1, strlen( $input ) - ($level+1)*2 );
        return "<h" . $level . ">" . $body . "</h" . $level . ">";
      }
    }
    return $input;
  }
}
?>
