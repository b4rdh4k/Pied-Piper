<?php
class Contact_model {
    use Model;

    protected $table = 'messages';

    public function findAll() {
        try {
            $query = "SELECT * FROM {$this->table} ORDER BY timestamp DESC";
            return $this->query($query);
        } catch (PDOException $e) {
            echo 'Error executing query: ' . $e->getMessage();
            return false;
        }
    }
    public function saveMessage($name, $email, $message){
        $query = "INSERT INTO {$this->table} (user_id, sender_name, sender_email, message_text) VALUES (?, ?, ?, ?)";
        $this->query($query, [1, $name, $email, $message]);
    }

}
?>