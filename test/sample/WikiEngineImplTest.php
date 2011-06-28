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
 
  /**
   * @test
   */
  public function toHtml_Heading() {
    $input = "= Heading =";
    $expected = "<h1>Heading</h1>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }

  /**
   * @test
   */
  public function toHtml_Heading2() {
    $input = "== Heading2 ==";
    $expected = "<h2>Heading2</h2>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }

  /**
   * @test
   */
  public function toHtml_level3() {
    $input = "=== Level3 ===";
    $expected = "<h3>Level3</h3>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }
  
  /**
   * @test
   */
  public function toHtml_level4() {
    $input = "==== Level4 ====";
    $expected = "<h4>Level4</h4>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }
  
  /**
   * @test
   */
  public function toHtml_level5() {
    $input = "===== Level5 =====";
    $expected = "<h5>Level5</h5>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }
  
  /**
   * @test
   */
  public function toHtml_level6() {
    $input = "====== Level6 ======";
    $expected = "<h6>Level6</h6>";
    $actual = $this->target->toHtml($input);
    $this->assertEquals($actual,$expected);
  }  
}
?>