<?php

namespace StringUtil;

class StringUtil {
    public static function onlyNumbers($string)
    {
        return preg_replace('/\D/', '', $string);
    }
    public static function toAlphaNumeric($string)
    {
        $string = mb_strtolower(trim($string));
        $from = array('Á', 'Í', 'Ó', 'Ú', 'É', 'Ä', 'Ï', 'Ö', 'Ü', 'Ë', 'À', 'Ì', 'Ò', 'Ù', 'È', 'Ã', 'Õ', 'Â', 'Î', 'Ô', 'Û', 'Ê', 'á', 'í', 'ó', 'ú', 'é', 'ä', 'ï', 'ö', 'ü', 'ë', 'à', 'ì', 'ò', 'ù', 'è', 'ã', 'õ', 'â', 'î', 'ô', 'û', 'ê', 'Ç', 'ç', ' ', '_');
        $to = array('A', 'I', 'O', 'U', 'E', 'A', 'I', 'O', 'U', 'E', 'A', 'I', 'O', 'U', 'E', 'A', 'O', 'A', 'I', 'O', 'U', 'E', 'a', 'i', 'o', 'u', 'e', 'a', 'i', 'o', 'u', 'e', 'a', 'i', 'o', 'u', 'e', 'a', 'o', 'a', 'i', 'o', 'u', 'e', 'C', 'c', '-', '-');
        $string = preg_replace('/[^a-zA-Z0-9_-]/', '', str_replace($from, $to, $string));
        return trim($string, '-');
    }
}