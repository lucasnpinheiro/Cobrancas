<?php

namespace App\Controller\Administrador;

use App\Controller\Administrador\AdministradorAppController;

/**
 * PedidosProdutos Controller
 *
 * @property \App\Model\Table\PedidosProdutosTable $PedidosProdutos
 */
class PedidosProdutosController extends AdministradorAppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Pedidos', 'Produtos']
        ];
        $this->set('pedidosProdutos', $this->paginate($this->PedidosProdutos));
        $this->set('_serialize', ['pedidosProdutos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Produto id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $pedidosProduto = $this->PedidosProdutos->get($id, [
            'contain' => ['Pedidos', 'Produtos']
        ]);
        $this->set('pedidosProduto', $pedidosProduto);
        $this->set('_serialize', ['pedidosProduto']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pedidosProduto = $this->PedidosProdutos->newEntity();
        if ($this->request->is('post')) {
            $pedidosProduto = $this->PedidosProdutos->patchEntity($pedidosProduto, $this->request->data);
            if ($this->PedidosProdutos->save($pedidosProduto)) {
                $this->Flash->success(__('The pedidos produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedidos produto could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->PedidosProdutos->Pedidos->find('list', ['limit' => 200]);
        $produtos = $this->PedidosProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosProduto', 'pedidos', 'produtos'));
        $this->set('_serialize', ['pedidosProduto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Produto id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $pedidosProduto = $this->PedidosProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosProduto = $this->PedidosProdutos->patchEntity($pedidosProduto, $this->request->data);
            if ($this->PedidosProdutos->save($pedidosProduto)) {
                $this->Flash->success(__('The pedidos produto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedidos produto could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->PedidosProdutos->Pedidos->find('list', ['limit' => 200]);
        $produtos = $this->PedidosProdutos->Produtos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosProduto', 'pedidos', 'produtos'));
        $this->set('_serialize', ['pedidosProduto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Produto id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosProduto = $this->PedidosProdutos->get($id);
        if ($this->PedidosProdutos->delete($pedidosProduto)) {
            $this->Flash->success(__('The pedidos produto has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
