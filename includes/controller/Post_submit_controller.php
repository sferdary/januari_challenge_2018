<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

include_once '../../../includes/model/Dbc.php';

class Post_submit_controller extends Dbc
{
    protected $post_array;

    public function __construct($post_array)
    {
        $this->post_array = $post_array;
    }

    public function PostData()
    {
        $post_array = $this->post_array;
        $subject = $post_array['subject'];
        $name = $post_array['name'];
        $content = $post_array['comment'];
        $date = $date = date('d-m-Y H:i');
        ;

        $stmt = $this->connect()->prepare
        (
            "INSERT into posts (subject, uid, content, postdate) VALUES (:subject, :uid,:content,:postdate)"
        )
        or die('stmt error');

        if ($stmt->execute(array(
            ':subject' => $subject,
            ':uid' => $name,
            ':content' => $content,
            ':postdate' => $date
        ))){
            $result = "../index.php?post_succes=true";
        }else{
            $result = "../index.php?post_succes=false";

        }
        return $result;
    }
}