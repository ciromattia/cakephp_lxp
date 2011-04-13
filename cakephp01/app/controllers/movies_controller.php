<?php
class MoviesController extends AppController {

	public $components = array('Session');

	function beforeFilter() {
		Configure::write('Config.language','it_IT');
	}
	
	function index() {
		$movies = $this->Movie->find('all');
		$this->set('movies',$movies);
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Movie->create($this->data);
			if ($this->Movie->save()) {
				$this->Session->setFlash(__('The movie has been saved',true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.',true));
			}
		}
	}
	
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for movie',true));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Movie->delete($id)) {
			$this->Session->setFlash(__('Movie deleted',true));
		} else {
			$this->Session->setFlash(__('Movie was not deleted', true));
		}
		$this->redirect(array('action' => 'index'));
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid movie',true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Movie->save($this->data)) {
				$this->Session->setFlash(__('The movie has been saved',true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.',true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Movie->read(null, $id);
		}
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid movie',true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('movie', $this->Movie->findById($id));
	}
}