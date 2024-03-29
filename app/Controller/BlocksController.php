<?php
/**
 * RBooking
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    RBooking
 * @subpackage Core
 * @author     Ivica <ivicadevelopermarinkovic@gmail.com>
 * @copyright  2018 Ivica 
 * 
 * 
 */
class BlocksController extends AppController
{
    /**
     * Controller name
     *
     * @var string
     * @access public
     */
    public $name = 'Blocks';
    public function admin_index()
    {
        $this->pageTitle = __l('Blocks');
		$plugins = explode(',', Configure::read('Hook.bootstraps'));
        array_push($plugins, '');
		$this->paginate['Block'] = array(
			'conditions' => array(
			'Block.plugin_name' => $plugins
			),
			'order' => array(
			'Block.weight' => 'ASC'
			)
		);
		$this->Block->recursive = 0;
        $this->set('blocks', $this->paginate());
        $moreActions = $this->Block->moreActions;
		$this->set('moreActions',$moreActions);
    }
    public function admin_add()
    {
        $this->pageTitle = __l('Add Block');
        if (!empty($this->request->data)) {
            $this->Block->create();
            if ($this->Block->save($this->request->data)) {
                $this->Session->setFlash(__l('Block has been added'), 'default', null, 'success');
                if (isset($this->request->data['apply'])) {
                    $this->redirect(array(
                        'action' => 'edit',
                        $this->Block->id
                    ));
                } else {
                    $this->redirect(array(
                        'action' => 'index'
                    ));
                }
            } else {
                $this->Session->setFlash(__l('Block could not be added. Please, try again.'), 'default', null, 'error');
            }
        }
        $regions = $this->Block->Region->find('list');
        $this->set(compact('regions'));
    }
    public function admin_edit($id = null)
    {
        $this->pageTitle = __l('Edit Block');
        if (!$id && empty($this->request->data)) {
            $this->Session->setFlash(__l('Invalid Block'), 'default', null, 'error');
            $this->redirect(array(
                'action' => 'index'
            ));
        }
        if (!empty($this->request->data)) {
            if ($this->Block->save($this->request->data)) {
                $this->Session->setFlash(__l('Block has been updated'), 'default', null, 'success');
                if (isset($this->request->data['apply'])) {
                    $this->redirect(array(
                        'action' => 'edit',
                        $id
                    ));
                } else {
                    $this->redirect(array(
                        'action' => 'index'
                    ));
                }
            } else {
                $this->Session->setFlash(__l('Block could not be updated. Please, try again.'), 'default', null, 'error');
            }
        }
        if (empty($this->request->data)) {
            $this->request->data = $this->Block->read(null, $id);
            if (empty($this->request->data)) {
                throw new NotFoundException(__l('Invalid request'));
            }
        }
        $regions = $this->Block->Region->find('list');
        $this->set(compact('regions'));
    }
    public function admin_delete($id = null)
    {
        if (is_null($id)) {
            throw new NotFoundException(__l('Invalid request'));
        }
        if ($this->Block->delete($id)) {
            $this->Session->setFlash(__l('Block deleted'), 'default', null, 'success');
            $this->redirect(array(
                'action' => 'index'
            ));
        } else {
            throw new NotFoundException(__l('Invalid request'));
        }
    }
    public function admin_moveup($id, $step = 1)
    {
        if ($this->Block->moveUp($id, $step)) {
            $this->Session->setFlash(__l('Moved up successfully') , 'default', null, 'success');
        } else {
            $this->Session->setFlash(__l('Could not move up') , 'default', null, 'error');
        }
        $this->redirect(array(
            'action' => 'index'
        ));
    }
    public function admin_movedown($id, $step = 1)
    {
        if ($this->Block->moveDown($id, $step)) {
            $this->Session->setFlash(__l('Moved down successfully') , 'default', null, 'success');
        } else {
            $this->Session->setFlash(__l('Could not move down') , 'default', null, 'error');
        }
        $this->redirect(array(
            'action' => 'index'
        ));
    }
    public function admin_process()
    {
        $action = $this->request->data['Block']['action'];
        $ids = array();
        foreach($this->request->data['Block'] as $id => $value) {
            if ($id != 'action' && $value['id'] == 1) {
                $ids[] = $id;
            }
        }
        if (count($ids) == 0 || $action == null) {
            $this->Session->setFlash(sprintf(__l('No %s selected.'), Configure::read('item.alt_name_for_item_plural_small')) , 'default', null, 'error');
            $this->redirect(array(
                'action' => 'index'
            ));
        }
        if ($action == 'delete' && $this->Block->deleteAll(array(
            'Block.id' => $ids
        ) , true, true)) {
            $this->Session->setFlash(__l('Checked records has been deleted'), 'default', null, 'success');
        } elseif ($action == 'publish' && $this->Block->updateAll(array(
            'Block.status' => true
        ) , array(
            'Block.id' => $ids
        ))) {
            $this->Session->setFlash(__l('Checked records has been published'), 'default', null, 'success');
        } elseif ($action == 'unpublish' && $this->Block->updateAll(array(
            'Block.status' => false
        ) , array(
            'Block.id' => $ids
        ))) {
            $this->Session->setFlash(__l('Checked records has been unpublished'), 'default', null, 'success');
        } else {
            $this->Session->setFlash(__l('An error occurred.') , 'default', null, 'error');
        }
        $this->redirect(array(
            'action' => 'index'
        ));
    }
}
