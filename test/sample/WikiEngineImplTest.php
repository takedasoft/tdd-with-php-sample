<?php
require_once("/src/sample/WikiEngineImpl.php");

class WikiEngineImplTest extends PHPUnit_Framework_TestCase {
  
  public function setUp(){
    $this->target = new WikiEngineImpl();
  }
  
  /**
   * @test
   */
  public function toHtml_HelloWorld() {
    $input = "Hello World";
    $expected = "Hello World";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }
  
  /**
   * @test
   */
  public function toHtml_TDD_Bootcamp() {
    $input = "TDD Bootcamp";
    $expected = "TDD Bootcamp";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }

  /**
   * @test
   */
  public function implements_WikiEngine() {
    $this->assertInstanceOf("WikiEngine", $this->target);
  }
 
  /**
   * @test
   * @expectedException InvalidArgumentException
   */
  public function toHtml_null() {
    $this->target->toHtml(null);
  }
 
}
?>