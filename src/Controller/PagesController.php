<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    public function initialize() {
        //die(pr($_REQUEST));
        parent::initialize();
    }
    
    public function allshouts() {
        
        $this->loadModel('Shouts');
        $shout = $this->Shouts->newEntity();

        if ($this->request->is('post')) {
            $shout = $this->Shouts->patchEntity($shout, $this->request->data);
            if ($this->Shouts->save($shout)) {
                $this->Flash->success('Your shout out has been added');
                $this->redirect(['action' => 'allshouts']);
            } else {
                $this->Flash->error('There was an issue while attempting to save your shout out.');
            }
        }

        $shouts = $this->Shouts->find('all')
                ->order('created DESC')
                ->limit(20);

        $this->set('shouts', $shouts);  //Passinig variable to view
        $this->set('shout', $shout);  //Passinig variable to view
        //die('HERE');
    }

    public function about() {
        
    }

    public function index() {
        $this->redirect(['action' => 'allshouts']);
    }

}
