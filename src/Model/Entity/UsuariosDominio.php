<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsuariosDominio Entity.
 */
class UsuariosDominio extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'usuario_id' => true,
        'dominio' => true,
        'status' => true,
        'usuario' => true,
    ];
}
