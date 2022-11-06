<?php

namespace sbolch\UniqueHash;

use Exception;

class HashGenerator {
    /**
     * @throws Exception
     */
    public static function get(int $length = 32): string {
    	if(function_exists('random_bytes')) {
    		$str = bin2hex(random_bytes(ceil($length / 2)));
    	} elseif(function_exists('openssl_random_pseudo_bytes')) {
    		$str = bin2hex(openssl_random_pseudo_bytes(ceil($length / 2)));
    	} else {
	        $str = uniqid(mt_rand(), true);

	        if(strlen($str) > $length) {
	            $str = str_replace('.', '', $str);
	        } else {
	            $str = str_replace('.', dechex(mt_rand(0, 15)), $str);
	        }

	        while(strlen($str) < $length) {
	            $str .= dechex(mt_rand(0, 15));
	        }
    	}
    	return substr($str, 0, $length);
    }
}