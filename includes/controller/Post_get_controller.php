<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
include_once '../../includes/model/Dbc.php';

class Post_get_controller extends Dbc
{
    public function getPosts()
    {
        $stmt = $this->connect()->prepare("SELECT * FROM posts");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $result = array();
        while ($row = $stmt->fetch()) {
            $result[] = $row;
        }
        return $result;
    }
}