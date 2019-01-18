<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

$pagetitle = 'contact';
$resources = '../../resources';
$home = '';
$archeologie = '';
$contact = 'active';
$homeLink = '../../';
$archeologieLink = '../archeologie';
$contactLink = '';
$arrow_left = '../archeologie';

include_once '../../includes/controller/Recaptcha_public_key.php';
$public_key_obj = new Recaptcha_public_key();
$public_key = $public_key_obj->setPublicKey();
require_once '../../includes/handlers/definition_handler.php';

require_once "{$resources}/view/layouts/header.php";
?>
    <a href="<?php echo ARROW_LEFT; ?>">
        <button type="button" class="btn btn-dark" id="left">←</button>
    </a>
    <div class="content-wrapper">
    <div class="row home-content-row">
        <div class="col-sm sub-content-col">
            <h2 class="post-title text-center">
                CONTACT
            </h2>
            <?php require_once "{$resources}/view/includes/form.php"; ?>
        </div>
    </div>
<?php
require_once "{$resources}/view/layouts/footer.php";