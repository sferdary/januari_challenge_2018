<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
$pagetitle = 'Reacties';
//RESOURCES
$resources = '../../resources';

//NAVIGATION
$home = '';
$archeologie = '';
$contact = 'active';

$homeLink = '../../';
$archeologieLink = '../archeologie';
$contactLink = '';

$arrow_left = '../archeologie';

include_once '../../includes/controller/Recaptcha_v2_controller.php';
$public_key_obj = new Recaptcha_v2_controller();
$public_key = $public_key_obj->setPublicKey();
require_once '../../includes/handlers/definition_handler.php';
if (isset($_POST['recaptcha_response'])) {
    include_once '../../includes/controller/Recaptcha_v2_controller.php';
    $g_v2_obj = new Recaptcha_v2_controller();
    $data = $g_v2_obj->setCaptcha_v2($_POST['recaptcha_response']);
    if (isset($data->success) && $data->success == true) {
        header('Location: index.php?reCaptcha_success=true');
        echo 'yey';
        var_dump($data);

    } else {
        header('Location: index.php?reCaptcha_success=false');
        var_dump($data);
    }
}
require_once "{$resources}/view/layouts/header.php";
?>
    <a href="<?php echo ARROW_LEFT; ?>">
        <button type="button" class="btn btn-dark" id="left">←</button>
    </a>
    <div class="content-wrapper">
    <div class="row home-content-row">
        <div class="col-sm sub-content-col">
            <h2 class="post-title text-center">
                REACTIES
            </h2>
            <?php require_once "{$resources}/view/includes/form.php"; ?>
        </div>
    </div>


<?php
require_once "{$resources}/view/layouts/footer.php";
