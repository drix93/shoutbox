<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shouts Controller
 *
 * @property \App\Model\Table\ShoutsTable $Shouts
 */
class ShoutsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $shouts = $this->paginate($this->Shouts);

        $this->set(compact('shouts'));
        $this->set('_serialize', ['shouts']);
    }

    /**
     * View method
     *
     * @param string|null $id Shout id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shout = $this->Shouts->get($id, [
            'contain' => []
        ]);

        $this->set('shout', $shout);
        $this->set('_serialize', ['shout']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shout = $this->Shouts->newEntity();
        if ($this->request->is('post')) {
            $shout = $this->Shouts->patchEntity($shout, $this->request->data);
            if ($this->Shouts->save($shout)) {
                $this->Flash->success(__('The shout has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shout could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('shout'));
        $this->set('_serialize', ['shout']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shout id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shout = $this->Shouts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shout = $this->Shouts->patchEntity($shout, $this->request->data);
            if ($this->Shouts->save($shout)) {
                $this->Flash->success(__('The shout has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shout could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('shout'));
        $this->set('_serialize', ['shout']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shout id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shout = $this->Shouts->get($id);
        if ($this->Shouts->delete($shout)) {
            $this->Flash->success(__('The shout has been deleted.'));
        } else {
            $this->Flash->error(__('The shout could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
