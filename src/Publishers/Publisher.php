<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Js\TinyMce\Publishers;

use BasicApp\Core\Publisher as BasePublisher;

class Publisher extends BasePublisher
{

    protected $destination = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'tinymce';

    public $createDestination = true;

    public $url = 'https://download.tiny.cloud/tinymce/community/tinymce_6.8.3_dev.zip';

    public $allowedTypes = [
        'md',
        'txt'
    ];

    public $allowedFiles = [
        'tinymce.d.ts'
    ];

    public function publish(): bool
    {
        if (count(directory_map($this->destination)) > 0)
        {
            return true;
        }
        
        return $this->downloadFile($this->url)
            ->extractZipArchive($this->getScratch() . 'tinymce_6.8.3_dev.zip')
            ->setSource($this->getScratch() . 'tinymce/js/tinymce')
            ->addPath('/')
            ->merge(false);
    }

}