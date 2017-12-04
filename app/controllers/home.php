<?php

class Home extends Controller {
    public function index() {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            if ($username == 'admin'){
                $this->user();
            }else{
                $this->client();
            }
        }else {
            header('Location: ' . LOGIN);
            die;
        }
    }

    public function login() {
        $this->view('login');
    }
    
    public function user(){
        $user = $this->model('User');
        $this->view('user', $user->getUsers());
    }
    
    public function client(){
        $client = $this->model('Client');
        $this->view('client', $client);
    }
}
