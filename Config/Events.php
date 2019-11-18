<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

SystemEvents::onUpdate(function()
{
    $source = dirname(COMPOSER_PATH) . '/npm-asset/tinymce';

    $target = FCPATH . 'js' . DIRECTORY_SEPARATOR . 'tinymce';

    if (is_dir($target))
    {
        return;
    }
    
    CliHelper::copy($source, $target);

    CliHelper::copy(dirname(__DIR__) . '/Js/init.js', $target . '/init.js');
});