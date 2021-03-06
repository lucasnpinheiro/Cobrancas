<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fatura Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $data_vencimento
 * @property \Cake\I18n\Time $data_pagamento
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $pedido_id
 * @property int $status
 * @property float $valor
 * @property float $juros
 * @property string $codigo
 * @property string $token
 * @property float $valor_recebido
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Fatura extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
