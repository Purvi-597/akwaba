<?php


namespace Twilio;


class VersionInfo {
    const MAJOR = 6;
<<<<<<< HEAD
    const MINOR = 42;
    const PATCH = 2;
=======
    const MINOR = 43;
    const PATCH = 3;
>>>>>>> sahil

    public static function string() {
        return implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }
}
