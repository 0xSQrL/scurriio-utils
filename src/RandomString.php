<?php
namespace Scurriio\Utils;

use SplFixedArray;

class RandomString{

    const ALPHA = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    /**
     * Generate a random string of given length
     */
    static function make(int $length=64): string{
        $str = new SplFixedArray($length);
        $alphaLen = strlen(RandomString::ALPHA);
        for($i = 0; $i < $length; $i++){
            $str[$i] = RandomString::ALPHA[random_int(0, $alphaLen - 1)];
        }
        return join('', $str->toArray());
    }
}
?>