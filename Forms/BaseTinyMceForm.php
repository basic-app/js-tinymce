<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Js\TinyMce\Forms;

use BasicApp\Js\TinyMce\Config\TinyMce;

abstract class BaseTinyMceForm extends \BasicApp\Config\BaseConfigForm
{

    protected $returnType = TinyMce::class;

    protected $validationRules = [
        'toolbar' => 'max_length[65535]',
        'plugins' => 'max_length[65535]',
        'height' => 'is_natural',
        'br_in_pre' => 'in_list[0,1]',
        'relative_urls' => 'in_list[0,1]'
    ];

    protected $fieldLabels = [
        'toolbar' => 'Toolbar',
        'plugins' => 'Plugins',
        'height' => 'Height',
        'br_in_pre' => 'BR in PRE',
        'relative_urls' => 'Relative Urls'
    ];

    protected $allowedFields = [
        'toolbar',
        'plugins',
        'height',
        'br_in_pre',
        'relative_urls'
    ];

    protected $i18nCategory = 'config';

    public function renderForm($form, $data)
    {
        $return = '';

        $return .= $form->textareaGroup($data, 'toolbar', ['rows' => 5]);

        $return .= $form->textareaGroup($data, 'plugins', ['rows' => 5]);

        $return .= $form->inputGroup($data, 'height');

        $return .= $form->checkboxGroup($data, 'br_in_pre');

        $return .= $form->checkboxGroup($data, 'relative_urls');

        return $return;
    }

}