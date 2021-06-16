<?php 

class Signin_model {
    private $table = 'loginn';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLogin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function loginadmin($username, $password)
    {
        $this->db->query('SELECT * FROM loginn WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }
    
    public function hapusLogin($id)
    {
        $query = "DELETE FROM article WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}