<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosProduto Entity.
 *
 * @property int $id
 * @property int $pedido_id
 * @property \App\Model\Entity\Pedido $pedido
 * @property int $produto_id
 * @property \App\Model\Entity\Produto $produto
 * @property float $valor
 * @property float $desconto
 * @property float $juros
 * @property int $status
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class PedidosProduto extends Entity
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
