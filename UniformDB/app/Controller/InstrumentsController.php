<?php
App::uses('AppController', 'Controller');

/**
 * Instruments Controller
 *
 * @property Instrument $Instrument
 */
class InstrumentsController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Instrument->recursive = 0;
		$this->set('instruments', $this->paginate());
		
		$this->set('fields', array_keys($this->Instrument->getColumnTypes()));
		
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Instrument->id = $id;
		if (!$this->Instrument->exists()) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		$this->set('instrument', $this->Instrument->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instrument->create();
			if ($this->Instrument->save($this->request->data)) {
				$this->Session->setFlash(__('The instrument has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this->Instrument->id = $id;
		if (!$this->Instrument->exists()) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Instrument->save($this->request->data)) {
				$this->Session->setFlash(__('The instrument has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrument could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Instrument->read(null, $id);
		}
	}
	
	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Instrument->id = $id;
		if (!$this->Instrument->exists()) {
			throw new NotFoundException(__('Invalid instrument'));
		}
		if ($this->Instrument->delete()) {
			$this->Session->setFlash(__('Instrument deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Instrument was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
}