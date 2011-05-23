<?php
class BooksController extends AppController {

	var $name = 'Books';

	function index() {
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('book', $this->Book->findBySlug($slug));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Book->create();
			if ($this->Book->save($this->data)) {
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Book->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Book->save($this->data)) {
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Book->read(null, $id);
		}
		$users = $this->Book->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for book', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Book->delete($id)) {
			$this->Session->setFlash(__('Book deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Book was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
