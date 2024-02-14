<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;
use BasicApp\Admin\AdminEvents;
use BasicApp\Helpers\Url;
use BasicApp\AdminMenu\AdminMenuEvents;

if (class_exists(AdminMenuEvents::class))
{
    AdminMenuEvents::onOptionsMenu(function($event)
    {
        $modelClass = \BasicApp\Js\TinyMce\Forms\TinyMceForm::class;

        $event->items[$modelClass] = [
            'label' => t('admin.menu', 'TinyMCE'),
            'icon' => 'fa fa-fw fa-edit',
            'url' => Url::createUrl('admin/config', ['class' => $modelClass])
        ];
    });
}