<?php 

namespace App\Controller;

use Cake\Http\Client;

Class BirthdayController extends AppController{
    public function index(){

    }

    public function getBirthday(){
        $http = new Client();
        $response = $http->get('http://10.120.134.112:3002/getBirthday');

        if($response->isSuccess()){
            $data = $response->getBody();
            $this->set('data', json_decode($data, true));
        } else {
            $this->Flash->error('Problème..');
        }
    }
}

