<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity.
 *
 * @property int $id
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $usuarios_dominio_id
 * @property \App\Model\Entity\UsuariosDominio $usuarios_dominio
 * @property float $valor
 * @property float $juros
 * @property float $desconto
 * @property float $total
 * @property int $status
 * @property int $periodo_emissao
 * @property \Cake\I18n\Time $data_ultima_emissao
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Fatura[] $faturas
 * @property \App\Model\Entity\Produto[] $produtos
 */
class Pedido extends Entity {

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
