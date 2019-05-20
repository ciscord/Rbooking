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
class CountriesController extends AppController
{
    public $name = 'Countries';
	public $permanentCacheAction = array(
		'public' => array(
			'index',
		) ,
    );	
    public function admin_index() 
    {
        $this->_redirectGET2Named(array(
            'q'
        ));
        $this->pageTitle = __l('Countries');
        $conditions = array();
        if (!empty($this->request->data['Country']['q'])) {
            $conditions[] = array(
                'OR' => array(
                    array(
                        'Country.name LIKE ' => '%' . $this->request->data['Country']['q'] . '%'
                    ) ,
                    array(
                        'Country.capital LIKE ' => '%' . $this->request->data['Country']['q'] . '%'
                    ) ,
                    array(
                        'Country.currency LIKE ' => '%' . $this->request->data['Country']['q'] . '%'
                    ) ,
                    array(
                        'Country.currencyname LIKE ' => '%' . $this->request->data['Country']['q'] . '%'
                    )
                )
            );
            $this->pageTitle.= sprintf(__l(' - Search - %s') , $this->request->data['Country']['q']);
        }
        $this->Country->recursive = -1;
        $this->paginate = array(
            'conditions' => $conditions,
            'fields' => array(
                'Country.id',
                'Country.name',
                'Country.fips_code',
                'Country.iso_alpha2',
                'Country.iso_alpha3',
                'Country.iso_numeric',
                'Country.capital',
                'Country.currency',
                'Country.currencyname',
                'Country.population',
            ) ,
            'order' => array(
                'Country.name' => 'asc'
            ) ,
            'recursive' => -1
        );
        $this->set('countries', $this->paginate());
        $moreActions = $this->Country->moreActions;
        $this->set('moreActions', $moreActions);
    }
    public function admin_add() 
    {
        $this->pageTitle = __l('Add Country');
        if (!empty($this->request->data)) {
            $this->Country->create();
            if ($this->Country->save($this->request->data)) {
                $this->Session->setFlash(__l('Country has been added') , 'default', null, 'success');
                $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__l('Country could not be added. Please, try again.'), 'default', null, 'success');
            }
        }
    }
    public function admin_edit($id = null) 
    {
        $this->pageTitle = __l('Edit Country');
        if (is_null($id)) {
            throw new NotFoundException(__l('Invalid request'));
        }
        if (!empty($this->request->data)) {
            if ($this->Country->save($this->request->data)) {
                $this->Session->setFlash(__l('Country has been updated'), 'default', null, 'success');
                $this->redirect(array(
                    'action' => 'index'
                ));
            } else {
                $this->Session->setFlash(__l('Country could not be updated. Please, try again.'), 'default', null, 'error');
            }
        } else {
            $this->request->data = $this->Country->read(null, $id);
            if (empty($this->request->data)) {
                throw new NotFoundException(__l('Invalid request'));
            }
        }
        $this->pageTitle.= ' - ' . $this->request->data['Country']['name'];
    }
    public function admin_delete($id = null) 
    {
        if (is_null($id)) {
            throw new NotFoundException(__l('Invalid request'));
        }
        if ($this->Country->delete($id)) {
            $this->Session->setFlash(__l('Country deleted'), 'default', null, 'success');
            if (!empty($this->request->query['r'])) {
                $this->redirect(Router::url('/', true) . $this->request->query['r']);
            } else {
                $this->redirect(array(
                    'action' => 'index'
                ));
            }
        } else {
            throw new NotFoundException(__l('Invalid request'));
        }
    }
    public function index()
    {
        $this->set('countries', $this->paginate());
		// <-- For iPhone App code
        if ($this->RequestHandler->prefers('json')) {
			Cms::dispatchEvent('Controller.Country.Index', $this, array());
        }		
    }	
}
?>