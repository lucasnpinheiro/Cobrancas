<?php
namespace App\Model\Table;

use App\Model\Entity\Fatura;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Faturas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $Pedidos
 */
class FaturasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('faturas');
        $this->displayField('usuario_id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pedidos', [
            'foreignKey' => 'pedido_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('data_vencimento', 'valid', ['rule' => 'date'])
            ->requirePresence('data_vencimento', 'create')
            ->notEmpty('data_vencimento');

        $validator
            ->add('data_pagamento', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_pagamento');

        $validator
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->add('valor', 'valid', ['rule' => 'numeric'])
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->add('juros', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('juros');

        $validator
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        $validator
            ->allowEmpty('token');

        $validator
            ->add('valor_recebido', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_recebido');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['pedido_id'], 'Pedidos'));
        return $rules;
    }
}
