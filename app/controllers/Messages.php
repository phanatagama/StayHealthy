<?php 

class Messages extends Controller {
    public function index()
    {
        if(!isset($_SESSION["login"])){
            header('Location:' . BASEURL . '/signin');
            exit;
}        
            $data['messages'] = $this->model('Messages_model')->getAllMessages();
            // var_dump($data['messages']);
            // die;
            $this->view('templates/header', $data);
            $this->view('messages/index', $data);
            $this->view('templates/footer');
    }
}