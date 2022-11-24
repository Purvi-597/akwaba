<?php


namespace Twilio;


class VersionInfo {
    const MAJOR = 6;
<<<<<<< HEAD
    const MINOR = 33;
    const PATCH = 1;
=======
    const MINOR = 43;
    const PATCH = 3;
>>>>>>> 6128d50ac241a120c5be9bcd073e7acdb0a11f7b

    public static function string() {
        return implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }
}
