<?php
interface WikiEngine {
  /**
   * Converting text in Wiki format to html.
   * @param String $text input text
   * @return String converted html
   */ 
  function toHtml($text);
}
?>
