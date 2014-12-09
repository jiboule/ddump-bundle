<?php

namespace Jiboule\DDumpBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JibouleDDumpBundle extends Bundle
{
}

if (!function_exists('dd') && !function_exists('d')) {
    function dd ($mixed, $params = array())
    {
        d($mixed, $params);
        exit();
    }
    function d ($mixed, $params = array())
    {
        echo '<pre class="dd"'.(isset($params['style']) ? ' style="'.$params['style'].'"' : '').'>'.print_r($txt, true).'</pre>';
    }
}