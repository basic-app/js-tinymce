<?php

namespace BasicApp\TinyMceJs;

class Assets
{

    public static function register(&$head, &$beginBody = '', &$endBody = '')
    {
        $head .= app_view('BasicApp\TinyMceJs\Head');
        
        $beginBody .= app_view('BasicApp\TinyMceJs\BeginBody');
        
        $endBody .= app_view('BasicApp\TinyMceJs\EndBody');
    }

}