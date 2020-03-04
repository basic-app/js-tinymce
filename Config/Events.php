<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;
use BasicApp\Admin\AdminEvents;
use BasicApp\Helpers\Url;

SystemEvents::onUpdate(function()
{
    $source = dirname(COMPOSER_PATH) . '/npm-asset/tinymce';

    $target = FCPATH . 'js' . DIRECTORY_SEPARATOR . 'tinymce';

    if (is_dir($target))
    {
        return;
    }
    
    CliHelper::copy($source, $target);

    CliHelper::copy(dirname(__DIR__) . '/init.js', $target . '/init.js');
});

if (class_exists(AdminEvents::class))
{
    AdminEvents::onOptionsMenu(function($event)
    {
        $modelClass = \BasicApp\Js\TinyMce\Forms\TinyMceForm::class;

        $event->items[$modelClass] = [
            'label' => t('admin.menu', 'TinyMCE'),
            'icon' => 'fa fa-fw fa-editor',
            'url' => Url::createUrl('admin/config', ['class' => $modelClass])
        ];
    });
}