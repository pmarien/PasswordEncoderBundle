<?php

namespace Pma\PasswordEncoderBundle\Encoder;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class MultiEncoder implements PasswordEncoderInterface
{

  public function encodePassword($raw, $salt)
  {
    $password   = $raw;
    $algorithms = array(
      'sha512',
      'whirlpool',
      'ripemd320',
      'snefru',
      'gost',
      'haval256,5',
      'tiger192,4'
    );

    foreach ($algorithms as $algorithm)
    {
      $password = hash($algorithm, $password . $salt) . $salt;
    }

    return $password;
  }



  public function isPasswordValid($encoded, $raw, $salt)
  {
    return $encoded === $this->encodePassword($raw, $salt);
  }
}
