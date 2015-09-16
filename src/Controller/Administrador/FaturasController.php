<?php

namespace App\Controller\Administrador;

use App\Controller\Administrador\AdministradorAppController;
/**
 * Faturas Controller
 *
 * @property \App\Model\Table\FaturasTable $Faturas
 */
class FaturasController extends AdministradorAppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios']
        ];
        $this->set('faturas', $this->paginate($this->Faturas));
        $this->set('_serialize', ['faturas']);
    }

    /**
     * View method
     *
     * @param string|null $id Fatura id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fatura = $this->Faturas->get($id, [
            'contain' => ['Usuarios']
        ]);
        $this->set('fatura', $fatura);
        $this->set('_serialize', ['fatura']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fatura = $this->Faturas->newEntity();
        if ($this->request->is('post')) {
            $fatura = $this->Faturas->patchEntity($fatura, $this->request->data);
            if ($this->Faturas->save($fatura)) {
                $this->Flash->success(__('The fatura has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fatura could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Faturas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('fatura', 'usuarios'));
        $this->set('_serialize', ['fatura']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fatura id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fatura = $this->Faturas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fatura = $this->Faturas->patchEntity($fatura, $this->request->data);
            if ($this->Faturas->save($fatura)) {
                $this->Flash->success(__('The fatura has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fatura could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Faturas->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('fatura', 'usuarios'));
        $this->set('_serialize', ['fatura']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fatura id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fatura = $this->Faturas->get($id);
        if ($this->Faturas->delete($fatura)) {
            $this->Flash->success(__('The fatura has been deleted.'));
        } else {
            $this->Flash->error(__('The fatura could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
