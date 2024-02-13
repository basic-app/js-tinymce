<?php

namespace BasicApp\Js\TinyMce\Config;

abstract class BaseTinyMce extends \BasicApp\Config\BaseConfig
{

    public $selector = '.editor';

    public $language;

    public $toolbar = 'undo redo link styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code';

    public $relative_urls = false;

    public $plugins = 'link code';

    public $br_in_pre = false;

    public $height = 450;

    public function __construct()
    {
        parent::__construct();

        if (!$this->language)
        {
            $this->language = service('request')->getLocale();
        }

        $this->relative_urls = (bool) $this->relative_urls;

        $this->br_in_pre = (bool) $this->br_in_pre;
    }

}