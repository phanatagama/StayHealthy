<?php 

class Blog_model {
    private $table = 'article';
    private $db;

    
	public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllArticle()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getArticleById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function getCommentByArticleId($id)
    {
        $this->db->query('SELECT * FROM comment WHERE id_article=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function addComment($data)
    {
    	$mydate = getdate(date("U"));
        $query = "INSERT INTO comment
                    VALUES
                  ('', :id_article, :name, :email, :description, :currentdate )";
        $this->db->query($query);
        $this->db->bind('id_article',$data["id_article"]);
        $this->db->bind('name', $data['name'] );
        $this->db->bind('email', $data['email']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('currentdate', $mydate['mday'] ." ". $mydate['month'] ." ". $mydate['year']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}