<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExpensesTypes Controller
 *
 * @property \App\Model\Table\ExpensesTypesTable $ExpensesTypes
 */
class ExpensesTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $expensesTypes = $this->paginate($this->ExpensesTypes);

        $this->set(compact('expensesTypes'));
        $this->set('_serialize', ['expensesTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Expenses Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expensesType = $this->ExpensesTypes->get($id, [
            'contain' => []
        ]);

        $this->set('expensesType', $expensesType);
        $this->set('_serialize', ['expensesType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expensesType = $this->ExpensesTypes->newEntity();
        if ($this->request->is('post')) {
            $expensesType = $this->ExpensesTypes->patchEntity($expensesType, $this->request->getData());
            if ($this->ExpensesTypes->save($expensesType)) {
                $this->Flash->success(__('The expenses type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses type could not be saved. Please, try again.'));
        }
        $this->set(compact('expensesType'));
        $this->set('_serialize', ['expensesType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expenses Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expensesType = $this->ExpensesTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expensesType = $this->ExpensesTypes->patchEntity($expensesType, $this->request->getData());
            if ($this->ExpensesTypes->save($expensesType)) {
                $this->Flash->success(__('The expenses type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses type could not be saved. Please, try again.'));
        }
        $this->set(compact('expensesType'));
        $this->set('_serialize', ['expensesType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expenses Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expensesType = $this->ExpensesTypes->get($id);
        if ($this->ExpensesTypes->delete($expensesType)) {
            $this->Flash->success(__('The expenses type has been deleted.'));
        } else {
            $this->Flash->error(__('The expenses type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
