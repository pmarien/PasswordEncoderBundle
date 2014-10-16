<?php


namespace Pma\PasswordEncoderBundle\Tests;

use Pma\PasswordEncoderBundle\Encoder\MultiEncoder;

class MultiEncoderTest extends \PHPUnit_Framework_TestCase
{

  public function testEncodePassword()
  {
    $encoder = new MultiEncoder();

    $this->assertEquals(
      'e5145c0c8aaa1a7fc7209971d386f1f74ee628400119071d',
      $encoder->encodePassword('PASSWORD', 'SALT_STRING')
    );
  }



  public function testIsPasswordValid()
  {
    $encoder = new MultiEncoder();

    $this->assertTrue(
      $encoder->isPasswordValid('e5145c0c8aaa1a7fc7209971d386f1f74ee628400119071d', 'PASSWORD', 'SALT_STRING')
    );
  }
}
 