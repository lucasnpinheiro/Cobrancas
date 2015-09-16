<?php

namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\HasMany $Faturas
 */
class UsuariosTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('usuarios');
        $this->displayField('usuario');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Faturas', [
            'foreignKey' => 'usuario_id'
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
                ->requirePresence('nome')
                ->notEmpty('nome');

        $validator
                ->allowEmpty('telefones');

        $validator
                ->requirePresence('emails')
                ->notEmpty('emails');

        $validator
                ->requirePresence('usuario')
                ->notEmpty('usuario');

        $validator
                ->allowEmpty('senha', 'create');

        $validator
                ->add('status', 'valid', ['rule' => 'numeric'])
                ->requirePresence('status')
                ->notEmpty('status');

        $validator
                ->requirePresence('tipo')
                ->notEmpty('tipo')
                ->add('tipo', 'inList', [
                    'rule' => ['inList', ['administrador', 'clientes']],
                    'message' => 'Informar um tipo de usuário'
        ]);

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
        $rules->add($rules->isUnique(['usuario']));
        return $rules;
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity) {
        if (!empty($entity->senha) AND strlen($entity->senha) < 60) {
            $senha = (new \Cake\Auth\DefaultPasswordHasher())->hash($entity->senha);
            $entity->senha = $senha;
        } else {
            unset($entity->senha);
        }
        return true;
    }

}
