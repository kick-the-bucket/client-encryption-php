<?php
namespace Mastercard\Developer\Utils;

class StringUtils {

    public static function startsWith($haystack, $needle) {
        return empty($needle) || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    public static function endsWith($haystack, $needle) {
        if (empty($needle)) {
            return true;
        }
        $diff = strlen($haystack) - strlen($needle);
        return $diff >= 0 && strpos($haystack, $needle, $diff) !== false;
    }
}