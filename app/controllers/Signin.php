<?php 

class Signin extends Controller {
    public function index()
    {
        if(isset($_SESSION["login"])){
            header('Location:' . BASEURL . '/menu');
            exit;
        }
        // $data['judul'] = 'Login';
        $data['loginn'] = $this->model('Signin_model')->getAllLogin();
        $this->view('templates/header', $data);
        $this->view('signin/index', $data);
    }

    public function login() {
        $data['loginn'] = $this->model('Signin_model')->getAllLogin();
        // var_dump($data['loginn']) ;
        echo $data['loginn'][0]['username'];
        if($data['loginn'][0]['username'] == $_POST['username']){
            if($data['loginn'][0]['password'] == $_POST['password']){
                $_SESSION['login'] = true;


                if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
                    $id = $_COOKIE['id'];
                    $key = $_COOKIE['key'];
                  
                    //cek cookie dan username
                    if( $key === hash('sha256', $data['loginn'][0]['username'])){
                      $_SESSION['login'] = true;
                    }
                  }

                if (isset($_POST["rememberme"])){
                    setcookie('id', $data['loginn'][0]['Id'], time()+60);
                    setcookie('key', hash('sha256',$data['loginn'][0]['username'], time()+60));
                }
                header('Location: ' . BASEURL . '/menu');
                exit;
            }
        }
    }
    public function logout(){
        session_start();
        $_SESSION=[];
        session_unset();
        session_destroy();
        setcookie('id','', time()-3600);
        setcookie('key','', time()-3600);
        header('Location: ' . BASEURL . '/signin');
        exit;

    }
}