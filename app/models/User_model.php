<?php
class User_model
{
    use Model;
    protected $table = 'users';

    public function findAll()
    {
        try {
            $query = "SELECT * FROM {$this->table} WHERE grouptype = 1";
            return $this->query($query);
        } catch (PDOException $e) {
            return [];
        }
    }
}
