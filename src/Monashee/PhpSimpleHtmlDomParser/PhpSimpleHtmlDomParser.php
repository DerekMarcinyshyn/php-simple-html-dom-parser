<?php namespace Monashee\PhpSimpleHtmlDomParser;
/**
 * PhpSimpleHtmlDomParser.php
 *
 * @author      Derek Marcinyshyn <derek@marcinyshyn.com>
 * @date        01/10/14
 * @reference   http://simplehtmldom.sourceforge.net/manual.htm
 */

require_once('simple_html_dom.php');

class PhpSimpleHtmlDomParser {

    /**
     * @return mixed
     */
    static public function file_get_html()
    {
        return call_user_func_array('\file_get_html', func_get_args());
    }

    /**
     * @return mixed
     */
    static public function str_get_html()
    {
        return call_user_func_array('\str_get_html', func_get_args());
    }
} 