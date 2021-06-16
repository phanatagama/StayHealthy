<?php 

class Messages_model {
    private $table = 'about';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMessages()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    
    public function getMessagesById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}