<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fatura Entity.
 */
class Fatura extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'data_vencimento' => true,
        'usuario_id' => true,
        'produtos' => true,
        'valor' => true,
        'status' => true,
        'data_pagamento' => true,
        'juros' => true,
        'codigo' => true,
        'token_moip' => true,
        'valor_recebido' => true,
        'desconto_moip' => true,
        'usuario' => true,
    ];
}
