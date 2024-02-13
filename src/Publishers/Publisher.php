<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Js\TinyMCE\Publishers;

use BasicApp\Core\Publisher as BasePublisher;

class Publisher extends BasePublisher
{

    protected $destination = FCPATH . 'assets' . DIRECTORY_SEPARATOR;

    public $createDestination = true;

    public $url = 'https://download.tiny.cloud/tinymce/community/tinymce_6.8.3_dev.zip';

    public function publish(): bool
    {
        /*
        if (is_dir($this->destination . DIRECTORY_SEPARATOR . 'css'))
        {
            return true;
        }
        */

        return $this->downloadFile($this->url)
            ->extractZipArchive($this->getScratch() . 'tinymce_6.8.3_dev.zip')
            ->setSource($this->getScratch() . 'tinymce')
            ->addPath('js/tinymce')
            ->merge(false);
    }

}