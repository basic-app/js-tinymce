<?php

namespace BasicApp\Js\TinyMce;

class TinyMceAsset extends \BasicApp\Core\Asset
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\Js\TinyMce\Views\head');
        
        $endBody .= app_view('BasicApp\Js\TinyMce\Views\end-body');
    }

}