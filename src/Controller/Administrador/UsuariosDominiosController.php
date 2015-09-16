<?php

namespace App\Controller\Administrador;

use App\Controller\Administrador\AdministradorAppController;

/**
 * UsuariosDominios Controller
 *
 * @property \App\Model\Table\UsuariosDominiosTable $UsuariosDominios
 */
class UsuariosDominiosController extends AdministradorAppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Usuarios'],
            'conditions' => [
                'UsuariosDominios.usuario_id' => $this->request->query('usuario_id')
            ]
        ];
        $this->set('usuariosDominios', $this->paginate($this->UsuariosDominios));
        $this->set('_serialize', ['usuariosDominios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Dominio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $usuariosDominio = $this->UsuariosDominios->get($id, [
            'contain' => ['Usuarios']
        ]);
        $this->set('usuariosDominio', $usuariosDominio);
        $this->set('_serialize', ['usuariosDominio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $usuariosDominio = $this->UsuariosDominios->newEntity();
        if ($this->request->is('post')) {
            $usuariosDominio = $this->UsuariosDominios->patchEntity($usuariosDominio, $this->request->data);
            if ($this->UsuariosDominios->save($usuariosDominio)) {
                $this->Flash->success(__('The usuarios dominio has been saved.'));
                return $this->redirect(['action' => 'index', '?' => ['usuario_id' => $usuariosDominio->usuario_id]]);
            } else {
                $this->Flash->error(__('The usuarios dominio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuariosDominio'));
        $this->set('_serialize', ['usuariosDominio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Dominio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $usuariosDominio = $this->UsuariosDominios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosDominio = $this->UsuariosDominios->patchEntity($usuariosDominio, $this->request->data);
            if ($this->UsuariosDominios->save($usuariosDominio)) {
                $this->Flash->success(__('The usuarios dominio has been saved.'));
                return $this->redirect(['action' => 'index', '?' => ['usuario_id' => $usuariosDominio->usuario_id]]);
            } else {
                $this->Flash->error(__('The usuarios dominio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuariosDominio'));
        $this->set('_serialize', ['usuariosDominio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Dominio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosDominio = $this->UsuariosDominios->get($id);
        if ($this->UsuariosDominios->delete($usuariosDominio)) {
            $this->Flash->success(__('The usuarios dominio has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios dominio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
