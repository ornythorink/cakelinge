<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Error\NotFoundException;
use Cake\Event\Event;

class UsersController extends RestrictedZoneController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(array('add'));
    }

     public function index() {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('utilisateur non valide'));
        }

        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add() {
        $user = $this->Users->newEntity($this->request->data);
        if ($this->request->is('post')) {
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }   
    
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(array('controller' => 'Admin', 'action' => 'index'));
            }
            $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect, essayez à nouveau."));
        }
    }
    
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }   

}

