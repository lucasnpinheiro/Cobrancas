<?php

namespace App\Model\Table;

use App\Model\Entity\Pedido;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $UsuariosDominios
 * @property \Cake\ORM\Association\HasMany $Faturas
 * @property \Cake\ORM\Association\BelongsToMany $Produtos
 */
class PedidosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('pedidos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->belongsTo('UsuariosDominios', [
            'foreignKey' => 'usuarios_dominio_id'
        ]);
        $this->hasMany('Faturas', [
            'foreignKey' => 'pedido_id'
        ]);
        $this->belongsToMany('Produtos', [
            'foreignKey' => 'pedido_id',
            'targetForeignKey' => 'produto_id',
            'joinTable' => 'pedidos_produtos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('id', 'create');

        $validator
                ->add('valor', 'valid', ['rule' => 'money'])
                ->allowEmpty('valor');

        $validator
                ->add('juros', 'valid', ['rule' => 'money'])
                ->allowEmpty('juros');

        $validator
                ->add('desconto', 'valid', ['rule' => 'money'])
                ->allowEmpty('desconto');

        $validator
                ->add('total', 'valid', ['rule' => 'money'])
                ->allowEmpty('total');

        $validator
                ->add('status', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('status');

        $validator
                ->add('periodo_emissao', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('periodo_emissao');

        $validator
                ->add('data_ultima_emissao', 'valid', ['rule' => ['date', 'dmy']])
                ->allowEmpty('data_ultima_emissao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['usuarios_dominio_id'], 'UsuariosDominios'));
        return $rules;
    }

    public function save(\Cake\Datasource\EntityInterface $entity, $options = array()) {
        $prod_pedidos = \Cake\ORM\TableRegistry::get('pedidos_produtos');
        if (isset($entity->id) and ! is_null($entity->id)) {
            $prod_pedidos->query('DELETE FROM pedidos_produtos WHERE pedido_id="' . $entity->id . '"');
        }
        $entity->juros = is_null($entity->juros) ? 0 : $entity->juros;
        $entity->desconto = is_null($entity->desconto) ? 0 : $entity->desconto;
        $return = parent::save($entity, $options);
        $id = $return->id;
        $total = 0;
        if (count($entity->produtos) > 0) {
            foreach ($entity->produtos as $value) {
                $prod_pedidos = \Cake\ORM\TableRegistry::get('pedidos_produtos');
                $pFind = $prod_pedidos->find()->where(['pedido_id' => $id, 'produto_id' => $value->id])->first();

                $pFind->valor = $value->valor;
                $pFind->desconto = 0;
                $pFind->juros = 0;
                $pFind->status = 1;
                $total += $value->valor;
                $prod_pedidos->save($pFind);
            }
        }
        $entity->valor = $total;
        $entity->total = ((($total * $entity->juros) + $total) - $entity->desconto);

        return parent::save($entity, $options);
    }

}
