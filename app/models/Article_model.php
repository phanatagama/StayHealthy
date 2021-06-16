<?php 

class Article_model {
    private $table = 'article';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArticle()
    {
        $this->db->query('SELECT * FROM article ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function getArticleById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getArticleByKeyword($keyword)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE title LIKE :keyword');
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function addArticle($data)
    {
        $query = "INSERT INTO article
                    VALUES
                  ('', :name, :title, :subtitle, :topic, :video, :images, :description)";
        switch ($data['topic']) {
            case '1':
                $data['topic']='Kesehatan';
                break;
            case '2':
                $data['topic']='Kebugaran';
                break;
            case '3':
                $data['topic']='Jasmani';
                break;
            default:
                $data['topic']='project';
                break;
        }
        $this->db->query($query);
        $this->db->bind('name', $data['fullname']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('subtitle', $data['subtitle']);
        $this->db->bind('topic', $data['topic']);
        $this->db->bind('video', $data['video']);
        $img_path = $this->imageUpload($data);
        $this->db->bind('images', $img_path);
        $this->db->bind('description', $data['description']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function hapusArticle($id)
    {
        $query = "DELETE FROM article WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataArticle($data)
    {
        $query = "UPDATE article SET
                    name = :name,
                    title = :title,
                    subtitle = :subtitle,
                    topic = :topic,
                    video = :video,
                    images = :images,
                    description =:description
                  WHERE id = :id";
        switch ($data['topic']) {
            case '1':
                $data['topic']='Kesehatan';
                break;
            case '2':
                $data['topic']='Kebugaran';
                break;
            case '3':
                $data['topic']='Jasmani';
                break;
            default:
                $data['topic']='project';
                break;
        }
        $this->db->query($query);
        $this->db->bind('name', $data['fullname']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('subtitle', $data['subtitle']);
        $this->db->bind('topic', $data['topic']);
        $this->db->bind('video', $data['video']);
        $img_path = $this->imageUpload($data);
        if ($img_path){
            $this->db->bind('images', $img_path);
        }else{
            $this->db->bind('images', $data['c_image']);
        }
        $this->db->bind('description', $data['description']);
        $this->db->bind('id', $data['id']);
        echo $query;
        // die;
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function imageUpload($data)
    {
        $target_dir = $_SERVER["DOCUMENT_ROOT"] . "/phpmvc/public/uploads/";
        $target_file = $target_dir . basename($_FILES["images"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["images"]["name"] == ""){
            return false;
        }
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["images"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["images"]["size"] > 5000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["images"]["name"])). " has been uploaded.";
            return $target_file;
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
    }
    public function imageUpdate($data)
    {
        // $c_image= $_FILES['images']['name'];
        $c_image_temp=$_FILES['images']['tmp_name'];
        if($c_image_temp != "")
        {
            return imageUpload($data);
        } else {
            return false;
        }
    }
}