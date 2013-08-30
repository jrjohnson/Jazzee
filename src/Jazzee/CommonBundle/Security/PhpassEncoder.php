<?php

namespace Jazzee\CommonBundle\Security;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Hautelook\Phpass\PasswordHash;

/*
 * Provide PHPAss encoding/decoding for users
 *
 */
class PhpassEncoder implements PasswordEncoderInterface
{

    public function encodePassword($raw, $salt)
    {
        $hasher         = new PasswordHash(8, false);
        $hashedPassword = $hasher->hashPassword($raw);

        return $hashedPassword;
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        $hasher = new PasswordHash(8, false);

        return $hasher->CheckPassword($raw, $encoded);
    }
}
