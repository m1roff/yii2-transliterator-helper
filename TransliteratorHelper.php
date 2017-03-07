<?php

namespace mirkhamidov\transliterator;


class TransliteratorHelper extends \dosamigos\transliterator\TransliteratorHelper
{
    /**
     * @param $string $string
     * @return string
     */
    public static function toUrl($string) {
        $replaces = [
            '/\s+/',
            "/[^a-z0-9\_\-]/",
        ];
        $to = ['_', ''];
        $string = self::process($string, '', 'en');
        $string = mb_strtolower($string, 'UTF-8');
        $string = preg_replace($replaces, $to, $string);
        return $string;
    }
}
