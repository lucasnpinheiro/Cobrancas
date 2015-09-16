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

use Bootstrap3\View\Helper\BootstrapHtmlHelper;

class MyHtmlHelper extends BootstrapHtmlHelper {

    public function __construct(\Cake\View\View $view, array $config = []) {
        $this->_useFontAwesome = true;
        if (isset($config['useFontAwesome'])) {
            $this->_useFontAwesome = $config['useFontAwesome'];
        }
        parent::__construct($view, $config);
    }

    public function statusLance($id) {
        $r = [
            0 => ['text' => __('Não aceito'), 'class' => 'danger'],
            1 => ['text' => __('Agardando aceitação'), 'class' => 'info'],
            2 => ['text' => __('Aceito'), 'class' => 'success'],
        ];
        return $this->label($r[$id]['text'], $r[$id]['class']);
    }

    public function status($id) {
        $r = [
            0 => ['text' => __('Inativo'), 'class' => 'danger'],
            1 => ['text' => __('Ativo'), 'class' => 'info'],
            9 => ['text' => __('Excluido'), 'class' => 'success'],
        ];
        return $this->label($r[$id]['text'], $r[$id]['class']);
    }

    public function statusTipoUser($id) {
        $r = [
            0 => ['text' => __('Administrador'), 'class' => 'primary'],
            1 => ['text' => __('Cliente'), 'class' => 'info'],
            2 => ['text' => __('Fornecedor'), 'class' => 'success'],
        ];
        return $this->label($r[$id]['text'], $r[$id]['class']);
    }

    public function statusPagSeguro($id) {
        $r = [
            1 => ['text' => __('Aguardando pagamento'), 'title' => 'O comprador iniciou a transação, mas até o momento o PagSeguro não recebeu nenhuma informação sobre o pagamento.', 'class' => 'default'],
            2 => ['text' => __('Em análise'), 'title' => 'O comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação.', 'class' => 'info'],
            3 => ['text' => __('Paga'), 'title' => 'A transação foi paga pelo comprador e o PagSeguro já recebeu uma confirmação da instituição financeira responsável pelo processamento.', 'class' => 'success'],
            4 => ['text' => __('Disponível'), 'title' => 'A transação foi paga e chegou ao final de seu prazo de liberação sem ter sido retornada e sem que haja nenhuma disputa aberta.', 'class' => 'success'],
            5 => ['text' => __('Em disputa'), 'title' => 'O comprador, dentro do prazo de liberação da transação, abriu uma disputa.', 'class' => 'warning'],
            6 => ['text' => __('Devolvida'), 'title' => 'O valor da transação foi devolvido para o comprador.', 'class' => 'danger'],
            7 => ['text' => __('Cancelada'), 'title' => 'A transação foi cancelada sem ter sido finalizada.', 'class' => 'danger'],
            8 => ['text' => __('Chargeback debitado'), 'title' => 'O valor da transação foi devolvido para o comprador.', 'class' => 'danger'],
            9 => ['text' => __('Em contestação'), 'title' => 'O comprador abriu uma solicitação de chargeback junto à operadora do cartão de crédito.', 'class' => 'warning'],
        ];
        return $this->label($r[$id]['text'], $r[$id]['class'], ['title' => $r[$id]['title']]);
    }

    public function link($title, $url = null, array $options = array()) {

        $default = [
            'iconDirection' => 'left',
            'class' => '',
            'preserveUrl' => false,
        ];
        $options = \Cake\Utility\Hash::merge($default, $options);

        if ($options['preserveUrl'] === true) {
            if (is_array($url)) {
                if (count($this->request->query)) {
                    $url = array_merge(['?' => $this->request->query], $url);
                }
            }
        }

        if (!isset($options['icon'])) {
            if (isset($url['action'])) {
                switch ($url['action']) {
                    case 'add':
                        $title = $this->iconDirection($title, 'save', $options['iconDirection']);
                        $options['class'] .= ' btn-success ';
                        break;
                    case 'edit':
                        $title = $this->iconDirection($title, 'pencil', $options['iconDirection']);
                        $options['class'] .= ' btn-warning ';
                        break;
                    case 'list':
                        $title = $this->iconDirection($title, 'search', $options['iconDirection']);
                        $options['class'] .= ' btn-primary ';
                        break;
                    case 'view':
                        $title = $this->iconDirection($title, 'list', $options['iconDirection']);
                        $options['class'] .= ' btn-info ';
                        break;

                    default:

                        break;
                }
            }
            if (isset($options['onclick'])) {
                if ($url === '#') {
                    $title = $this->iconDirection($title, 'trash-o', $options['iconDirection']);
                    $options['class'] .= ' btn-danger ';
                }
            }
            $options['escape'] = false;
            $options['class'] .= ' btn btn-xs ';
        }


        if (isset($options['icon']) AND $options['icon'] !== false) {
            $title = $this->iconDirection($title, $options['icon'], $options['iconDirection']);
            $options['escape'] = false;
            unset($options['icon']);
        }
        return parent::link($title, $url, $options);
    }

    private function iconDirection($title, $icon, $direction) {
        if ($direction === 'left') {
            return $this->icon($icon) . ' ' . $title;
        }
        return $title . ' ' . $this->icon($icon);
    }

}
