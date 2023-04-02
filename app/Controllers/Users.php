<?php 

namespace App\Controllers;

use App\Models\UserModel;
 
class Users extends BaseController
{
    // Create
    public function addUser(){
        return view('add_page');
    }
    
    public function create() {
        $model = model(UserModel::class);

        $data = $this->request->getPost(['name', 'email']);

        $model->save([
            'name' => $data['name'],
            'email'  => $data['email'],
        ]);

        return $this->response->redirect(site_url('/list'));
    }

    // Read
    public function index(){
        $model = model(UserModel::class);

        $data['users'] = $model->findAll();

        return view('board', $data);
    }
 
    // Update
    public function getUser($id = null){
        $model = model(UserModel::class);

        $data['user_list'] = $model->where('id', $id)->first();
        
        return view('edit_page', $data);
    }
 
    public function update(){
        $model = model(UserModel::class);

        $data = $this->request->getPost(['name', 'email']);
        $id = $this->request->getVar('id');

        $model->update($id, $data);
        
        return $this->response->redirect(site_url('/list'));
    }
  
    // Delete
    public function delete($id = null){
        $model = model(UserModel::class);

        $data['user'] = $model->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/list'));
    }    
}