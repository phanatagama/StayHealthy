<?php 

class Blog extends Controller {
    public function index()
    {
        $data['judul'] = 'Blog';
        $data['articles'] = $this->model('Blog_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    public function add()
    {
        if( $this->model('Blog_model')->addComment($_POST) > 0 ) {
            // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            echo "<script>alert('berhasil');</script>";
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['articles'] = $this->model('Blog_model')->getArticleById($id);
        $data['comments'] = $this->model('Blog_model')->getCommentByArticleId($id);
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }
}    