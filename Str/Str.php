<?php

namespace Terse;

/**
 * Terse\Str
 *
 * @link https://github.com/imjcw/terse-str
 * @author imjcw <imjcw@imjcw.com>
 */
abstract class Str
{
    /**
     * 字符分割形式转换驼峰
     * 
     * @param  string $string
     * @param  string $separator
     * @return string
     * 
     * <code>
     * echo Terse\Str::camelize('terse-str', '-'); // TerseStr
     * </code>
     */
    public static function camelize($string, $separator = '_')
    {
        $string = strtolower($string);
        $string = str_replace($separator, ' ', $string);
        $string = ucwords($string);
        return str_replace(' ', '', $string);
    }

    /**
     * 驼峰转换字符分割形式
     * 
     * @param  string $string
     * @param  string $separator
     * @return string
     * 
     * <code>
     * echo Terse\Str::uncamelize('TerseStr', '-'); // terse-str
     * </code>
     */
    public static function uncamelize($string, $separator = '_')
    {
        $string = preg_replace('/([a-z])([A-Z])/', "$1" . $separator . "$2", $string);
        return strtolower($string);
    }
}
