<?php

if (!function_exists('dd') && !function_exists('d')) {
    /**
     * @param $mixed
     * @param array $params
     */
    function dd($mixed, $params = array())
    {
        d($mixed, $params);
        exit();
    }

    /**
     * @param $mixed
     * @param array $params
     */
    function d($mixed, $params = array())
    {
        echo '<pre class="dd"'.(isset($params['style']) ? ' style="'.$params['style'].'"' : '').'>'.print_r($mixed, true).'</pre>';
    }
}

if (!function_exists('ddump')) {
    /**
     * @param $var
     */
    function ddump($var)
    {
        dump($var);
        exit();
    }
}
