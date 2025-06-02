<?php

class HomeModel extends Model
{
    public function getAllMessages()
    {
        $stmt = $this->db->query( "SELECT * FROM test" );
        $rows = $stmt->fetchAll();
        return $rows;
        // return "Hello from HomeModel!";
    }
}

?>