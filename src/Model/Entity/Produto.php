<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity.
 */
class Produto extends Entity {

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
    protected $_virtual = ['slug'];

    public function _getSlug() {
        return $this->_properties ['nome'] . ' - ' . \Cake\I18n\Number::format($this->_properties['valor'], [
                    'before' => 'R$ ',
                    'zero' => '0,00',
                    'places' => '2',
                    'precision' => '2',
                    'locale' => 'pt_BR',
                ]);
    }

}
