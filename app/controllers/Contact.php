<?php 

class Contact extends Controller {
    public function index()
    {
        
        $data['judul'] = 'Contact Us';
        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }
    public function add()
    {
        if( $this->model('About_model')->addabout($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            echo "<script>alert('berhasil');</script>";
            header('Location: ' . BASEURL . '/contact');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/contact');
            exit;
        }
    }
}