<?php

namespace BasicApp\Js\TinyMce;

class TinyMceAsset extends \BasicApp\Core\Asset
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\Js\TinyMce\Views\head');
        
        $beginBody .= app_view('BasicApp\Js\TinyMce\Views\begin-body');
        
        $endBody .= app_view('BasicApp\Js\TinyMce\Views\end-body');
    }

}