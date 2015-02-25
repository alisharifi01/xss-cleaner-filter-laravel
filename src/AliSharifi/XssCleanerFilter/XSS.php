<?php

class XSS {
    public static function clean()
    {
        $cleaned = static::deleteTags(Input::get());
        Input::merge($cleaned);
    }
    public static function deleteTags($array)
    {
        $out = array();
        foreach ($array as $key => $value) {
            $key = strip_tags($key);
            if (is_array($value)) {
                $out[$key] = static::deleteTags($value);
            } else {
                $out[$key] = trim(strip_tags($value));
            }
        }
        return $out;
    }
} 
