<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

session_start();

$subject = "Archeologie";

if (isset($_SESSION['post_data']['g_recaptcha'])) {
    include_once '../../../includes/controller/Recaptcha_validation.php';
    $g_v2_obj = new Recaptcha_validation();
    $data = $g_v2_obj->setCaptcha_v2($_SESSION['post_data']['g_recaptcha']);

    if (!isset($_SESSION['post_data']['name']) || !isset($_SESSION['post_data']['comment'])) {
        header("Location: ../index.php?error=emptyfields&name=" . $_SESSION['post_data']['name'] . "&comment=" . $_SESSION['post_data']['comment']);
        exit();
    } else if ($data->success == false) {
        header('Location: ../index.php?reCaptcha_success=false');
        exit();
    } else {
        include_once '../../../includes/controller/Post_submit_controller.php';
        $postdata = array
        (
            'subject' => $subject,
            'name' => $_SESSION['post_data']['name'],
            'comment' => $_SESSION['post_data']['comment']
        );
        $post_controller = new Post_submit_controller($postdata);
        $success = $post_controller->PostData();
        if (isset($success)){
            header('Location:' . $success);
        }
    }
}