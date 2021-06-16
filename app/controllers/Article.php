<?php 

class Article extends Controller {
    public function index()
    {
        // session_start(); 
        if(!isset($_SESSION["login"])){
            header('Location:' . BASEURL . '/signin');
            exit;
        }
        // $data['judul'] = 'New Article';
        $data['articles'] = $this->model('Article_model')->getAllArticle();
        $this->view('templates/header', $data);
        $this->view('article/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Buat Artikel Baru';
        $this->view('templates/header', $data);
        $this->view('article/create', $data);
        $this->view('templates/footer');
    }

    public function update($id)
    {
        $data['judul'] = 'Update Artikel';
        $article = $this->model('Article_model')->getArticleById($id);
        $data['id'] = $article['id'];
        $data['fullname'] = $article['name'];
        $data['title'] = $article['title'];
        $data['subtitle'] = $article['subtitle'];
        $data['images'] = $article['images'];
        $data['video'] = $article['video'];
        $data['description'] = $article['description'];
        $data['topic'] = $article['topic'];
        // $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('article/update', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if( $this->model('Article_model')->addArticle($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Article_model')->hapusArticle($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/article');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        }
    }

    // public function getubah($id)
    // {
    //     $a = $this->model('Article_model')->getArticleById($id);
    //     echo $a['title'];
    //     die;
    // }

    public function ubah()
    {
        if( $this->model('Article_model')->ubahDataArticle($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/article');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/article');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

}