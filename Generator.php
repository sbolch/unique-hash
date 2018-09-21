<?php

namespace SubbySnake\UniqueHash;

/**
 * @deprecated Generator class is deprecated and will be removed in 2.0. Please, use HashGenerator class instead.
 */
class Generator {

    public static function get() {
        $str = uniqid(mt_rand(), true);
        while(strlen($str) > 33) {
            $str = self::get();
        }

        if(strlen($str) == 33) {
            $str = str_replace('.', '', $str);
        } else {
            $str = str_replace('.', dechex(mt_rand(0, 15)), $str);
        }

        while(strlen($str) < 32) {
            $str .= dechex(mt_rand(0, 15));
        }

        return $str;
    }
}