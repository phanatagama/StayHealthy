<?php 
class Menu extends Controller {
    public function index()
    {
    	if(!isset($_SESSION["login"])){
            header('Location:' . BASEURL . '/signin');
            exit;
        }
        $data['judul'] = 'Menu';
        // $data['articles'] = $this->model('Blog_model')->getAllArticle();
        $this->view('templates/header');
        $this->view('menu/index');
        $this->view('templates/footer');
    }
}

?>