<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP MyHtmlHelper
 * @author lucas
 */

namespace App\View\Helper;

use Bootstrap3\View\Helper\BootstrapFormHelper;

class MyFormHelper extends BootstrapFormHelper {

    public $helpers = [
        'MyHtml' => [
            'className' => 'MyHtml'
        ],
        'Html',
        'Url',
        'bHtml' => [
            'className' => 'Bootstrap3.BootstrapHtml'
        ]
    ];

    public function editor($fieldName, array $options = array()) {
        $this->Html->css('/css/redactor.css', ['block' => 'css']);
        $this->Html->script('/js/redactor.js', ['block' => 'script']);
        $this->Html->scriptBlock("
            jQuery('document').ready(function(){
                jQuery('textarea.editor_redactor').redactor({
                    buttonSource: true,
                    lang: 'pt_br',
                    imageUpload: '" . \Cake\Routing\Router::url('/midias/upload', true) . "',
                    fileUpload: '" . \Cake\Routing\Router::url('/midias/upload', true) . "',
                    imageManagerJson: '" . \Cake\Routing\Router::url('/midias/lista', true) . "',
                    plugins: ['table', 'video', 'imagemanager', 'filemanager', 'fontsize', 'fontfamily', 'fontcolor']
                });  
            });
        ", ['block' => 'script']);


        if (!isset($options['class'])) {
            $options['class'] = '';
        }
        $options['class'] .= ' editor_redactor';
        $options['type'] = 'textarea';
        return $this->input($fieldName, $options);
    }

    public function input($fieldName, array $options = array()) {

        $options = $this->_parseOptions($fieldName, $options);

        $div = $this->_extractOption('div', $options, '');
        if ($div) {
            $_div = '';
            if (!isset($div['class'])) {
                $div['class'] = '';
            }
            $div['class'] = 'form-group {{type}}{{required}} ' . $div['class'];
            foreach ($div as $key => $value) {
                $_div .= $key . '="' . $value . '"';
            }
            $this->templates(['inputContainer' => '<div ' . $_div . '>{{content}}</div>']);
            unset($_div);
        }
        return parent::input($fieldName, $options);
    }

    public function status($fieldName, array $options = array()) {
        $options += [
            'type' => 'select',
            'options' => [
                0 => __('Inativo'),
                1 => __('Ativo'),
                9 => __('Excluido'),
            ],
            'empty' => __('Selecionar uma Situação')
        ];
        return $this->input($fieldName, $options);
    }

    public function button($title, array $options = array()) {
        if (!isset($options['icon'])) {
            $title = $this->MyHtml->icon('save') . ' ' . $title;
        }
        return parent::button($title, $options);
    }

    public function postLink($title, $url = null, array $options = array()) {
        $options['class'] = ' btn btn-xs ';
        $options['escape'] = false;
        if (!isset($options['icon'])) {
            $options['icon'] = 'trash-o';
            $options['class'] .= ' btn-danger ';
        }

        return parent::postLink($title, $url, $options);
    }

    public function select2($fieldName, array $options = array(), array $config = array()) {
        $config += ['language' => "pt-BR"];
        $options += ['id' => $this->_domId($fieldName)];
        $options += ['type' => 'select'];

        if (isset($config['tokenSeparators'])) {
            $options['help'] = 'Tipo(s) de separador(es) "' . implode('" ', $config['tokenSeparators']) . '"';
        }

        $this->Html->css('/select2-4.0.0/dist/css/select2.min.css', ['block' => 'css']);
        $this->Html->script('/select2-4.0.0/dist/js/select2.min.js', ['block' => 'script']);
        $this->Html->script('/select2-4.0.0/dist/js/i18n/pt-BR.js', ['block' => 'script']);
        $this->Html->scriptBlock("
            jQuery('document').ready(function(){
                $('#" . $options['id'] . "').select2(" . json_encode($config) . ");
            });
        ", ['block' => 'script']);
        return $this->input($fieldName, $options);
    }

}
