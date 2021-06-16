<?php 

class About_model {
    private $table = 'about';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAbout()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function getAboutById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function addabout($data)
    {
        $query = "INSERT INTO about
                    VALUES
                  ('', :name, :email, :namecompany, :subject, :Message, :phone)";
        $this->db->query($query);
        $this->db->bind('name', $data['inputname']);
        $this->db->bind('email', $data['inputemail']);
        $this->db->bind('namecompany', $data['inputcompany']);
        $this->db->bind('subject', $data['inputsubject']);
        $this->db->bind('Message', $data['inputmessage']);
        $this->db->bind('phone', $data['inputphone']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}