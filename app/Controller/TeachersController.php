<?php
App::uses('AppController', 'Controller');
/**
 * Teachers Controller
 *
 * @property Teacher $Teacher
 * @property PaginatorComponent $Paginator
 */
class TeachersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Teacher->exists($id)) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		$options = array('conditions' => array('Teacher.' . $this->Teacher->primaryKey => $id));
		$this->set('teacher', $this->Teacher->find('first', $options));
                $this->loadModel('DisciplineGroup');   
                $sql='SELECT `DisciplineGroup`.`id`, `DisciplineGroup`.`teacher_id`, `DisciplineGroup`.`discipline_id`, '
                        . '`DisciplineGroup`.`group_id`, `Discipline`.`id`, `Discipline`.`nome`, `Group`.`id`, '
                        . '`Group`.`nome`, `Group`.`ano` FROM `discipline_groups` AS `DisciplineGroup` LEFT JOIN '
                        . '`disciplines` AS `Discipline` ON (`DisciplineGroup`.`discipline_id` = `Discipline`.`id`) '
                        . 'LEFT JOIN `groups` AS `Group` ON (`DisciplineGroup`.`group_id` = `Group`.`id`) WHERE '
                        . '`DisciplineGroup`.`teacher_id` = '. $id.' AND `Group`.`status` = "ATIVO"';
                
                $disciplineGroups= $this->DisciplineGroup->query($sql);
                $this->set(compact('disciplineGroups'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->request->data)) {
				$this->Session->setFlash(__('The teacher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.'));
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
		if (!$this->Teacher->exists($id)) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Teacher->save($this->request->data)) {
				$this->Session->setFlash(__('The teacher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Teacher.' . $this->Teacher->primaryKey => $id));
			$this->request->data = $this->Teacher->find('first', $options);
		}
	}
        public function altsenha($id = null) {
		if (!$this->Teacher->exists($id)) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Teacher->save($this->request->data)) {
				$this->Session->setFlash(__('The teacher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Teacher.' . $this->Teacher->primaryKey => $id));
			$this->request->data = $this->Teacher->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Teacher->id = $id;
		if (!$this->Teacher->exists()) {
			throw new NotFoundException(__('Invalid teacher'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Teacher->delete()) {
			$this->Session->setFlash(__('The teacher has been deleted.'));
		} else {
			$this->Session->setFlash(__('The teacher could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
