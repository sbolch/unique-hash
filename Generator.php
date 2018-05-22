<?php

namespace SubbySnake\UniqueHash;

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