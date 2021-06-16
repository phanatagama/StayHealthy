<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        // $data['articles'] = $this->model('Home_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}