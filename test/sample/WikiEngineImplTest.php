<?php
require_once("/src/sample/WikiEngineImpl.php");

class WikiEngineImplTest extends PHPUnit_Framework_TestCase {
  
  /**
   * @test
   */
  public function toHtml_HelloWorld() {
    $target = new WikiEngineImpl();
    $input = "Hello World";
    $expected = "Hello World";
    $actual = $target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }

}
?>