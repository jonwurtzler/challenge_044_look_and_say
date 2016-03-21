<?php
use LookAndSay\LookAndSay;

/**
 * @author Jon Wurtzler <jon.wurtzler@gmail.com>
 */
class LookAndSayTest extends PHPUnit_Framework_TestCase
{
  /**
   * @var LookAndSay
   */
  protected $lookAndSay;

  public function setUp()
  {
    $this->lookAndSay = new LookAndSay();
  }

  public function tearDown()
  {
    $this->lookAndSay = null;
  }

  public function testSingleStep()
  {
    $output = $this->lookAndSay->run("1", 1);
    $this->assertEquals(11, $output);
  }

  public function testDoubleStep()
  {
    $output = $this->lookAndSay->run("1", 2);
    $this->assertEquals(21, $output);
  }

  public function testSevenSteps()
  {
    $output = $this->lookAndSay->run("1", 7);
    $this->assertEquals(1113213211, $output);
  }

  public function testTenSteps()
  {
    $output = $this->lookAndSay->run("1", 10);
    $this->assertEquals(11131221133112132113212221, $output);
  }


}
