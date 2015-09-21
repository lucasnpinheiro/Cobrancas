<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosFixture
 *
 */
class PedidosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuarios_dominio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'juros' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'desconto' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'total' => ['type' => 'float', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'status' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '0 - Inativo | 1 - Ativo | 9 - Excluido', 'precision' => null, 'autoIncrement' => null],
        'periodo_emissao' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '1 - Mensal | 2 - Trimestral | 3 - Semestral | 1 - Anual', 'precision' => null, 'autoIncrement' => null],
        'data_ultima_emissao' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'usuario_id' => 1,
            'usuarios_dominio_id' => 1,
            'valor' => 1,
            'juros' => 1,
            'desconto' => 1,
            'total' => 1,
            'status' => 1,
            'periodo_emissao' => 1,
            'data_ultima_emissao' => '2015-09-21',
            'created' => '2015-09-21 14:52:48',
            'modified' => '2015-09-21 14:52:48'
        ],
    ];
}
