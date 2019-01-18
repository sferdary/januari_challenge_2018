<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

$pagetitle = 'Archeologie';
$resources = '../../resources';
$home = '';
$archeologie = 'active';
$contact = '';
$homeLink = '../../';
$archeologieLink = '';
$contactLink = '../contact';
$arrow_left = '../../';
$arrow_right = '../contact';

include_once '../../includes/controller/Recaptcha_public_key.php';
$public_key_obj = new Recaptcha_public_key();
$public_key = $public_key_obj->setPublicKey();

if (isset($_POST['submit'])) {
    session_start();
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
    $g_recaptcha_v2 = $_POST['g-recaptcha-response'];

    $_SESSION['post_data'] = array(
        'name' => $name,
        'comment' => $comment,
        'g_recaptcha' => $g_recaptcha_v2,
    );
    header("Location: submit/index.php");
}

require_once '../../includes/handlers/definition_handler.php';
require_once "{$resources}/view/layouts/header.php";
?>
    <a href="<?php echo ARROW_LEFT; ?>">
        <button type="button" class="btn btn-dark" id="left">←</button>
    </a>
    <a href="<?php echo ARROW_RIGHT; ?>">
        <button type="button" class="btn btn-dark" id="right">→</button>
    </a>
    <div class="content-wrapper">
        <div class="row home-content-row">
            <div class="col-sm sub-content-col">
                <div class="empty-sm"></div>
                <p class="post-date text-center">
                    19 januari 2019
                </p>
                <h2 class="post-title text-center">
                    ARCHEOLOGIE
                </h2>
                <div class="empty-sm"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis tellus condimentum, euismod
                    urna sed, bibendum dolor. Cras at justo nec justo auctor lacinia a nec velit. Proin placerat
                    interdum
                    est, ac dignissim diam congue id. Sed consectetur mi mauris, nec ultricies quam tempus eu. Nulla
                    egestas diam a orci malesuada, sit amet rhoncus lacus dignissim. Aliquam non felis quis enim
                    tristique
                    lobortis non id ante. Donec interdum at diam quis gravida. In hac habitasse platea dictumst. Sed
                    velit erat, molestie sit amet sodales nec, dapibus vitae nisl. Ut in mollis tellus.
                </p>
            </div>
        </div>
        <div class="row home-content-row">
            <div class="col-sm sub-content-col text-center">
                <img src="../../resources/view/img/potten.png" alt="">
            </div>
        </div>
        <div class="row home-content-row">
            <div class="col-sm sub-content-col">
                <p class="text-center"><i>Ipsus sit op u</i></p>
                <p>
                    In et faucibus elit. Curabitur eget neque tellus. Sed purus enim, tempus nec rhoncus eu,
                    luctus
                    nec metus. In pulvinar eleifend sem, sit amet iaculis eros volutpat fringilla. Proin feugiat
                    placerat nisi. Suspendisse nec odio justo. Vestibulum varius ipsum vel nulla sagittis
                    condimentum. Sed ac leo eros. Fusce orci lorem, aliquet quis lobortis ac, finibus ut massa.
                    Fusce sit amet consequat leo. Proin eget mollis justo, ac porta felis. Mauris vitae placerat
                    augue.
                </p>
            </div>
        </div>
        <div class="row home-content-row">
            <div class="col-sm sub-content-col text-center">
                <img src="../../resources/view/img/paarden3.png" alt="">
            </div>
        </div>
        <div class="row home-content-row">
            <div class="col-sm sub-content-col">
                <p class="text-center"><i>Dolor et un leo</i></p>
                <p>
                    Quisque dictum placerat eros, non egestas lacus pretium eu. Nulla vel nisi enim. Duis consectetur
                    ex nec eros lacinia auctor. Maecenas consequat ex et ligula ultricies maximus. Sed molestie
                    suscipit est eget posuere. In faucibus tellus quis ligula vehicula vulputate. Nulla facilisi.
                    Mauris hendrerit erat erat. Fusce at lorem dignissim, hendrerit eros eget, varius orci. Vestibulum
                    porttitor sapien sed purus scelerisque elementum. Integer varius dapibus euismod. Nunc tincidunt,
                    tellus ut pulvinar viverra, nibh est imperdiet purus, eget porttitor diam augue vitae velit. Cras
                    id ante a ligula tempus lacinia sed a lectus.
                </p>
            </div>
        </div>
    </div>
    <div class="empty-sm"></div>
    <div class="content-wrapper">
        <div class="row home-content-row">
            <div class="col-sm sub-content-col">

                <h2 class="post-title text-center">
                    REACTIES
                </h2>
                <div class="empty-sm"></div>
                <div class="we">
                    <?php
                    include_once '../../includes/controller/Post_get_controller.php';
                    $posts_obj = new Post_get_controller();
                    $posts = $posts_obj->getPosts();

                    foreach ($posts as $post) { ?>
                        <div class="col-sm sub-content-col">
                            <div class="card-header">
                                <h5><?php echo $post['uid']; ?></h5>
                            </div>
                            <div class="card-body">
                                <p><?php echo $post['content']; ?></p>
                                <p class="post-date"><?php echo $post['postdate']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-sm"></div>
    <div class="content-wrapper">
        <div class="row home-content-row">
            <div class=" sub-content-col center-content">
                <h2 class="post-title text-center">
                    REAGEER
                </h2>
                <div class="empty-sm"></div>
                <div class="form text-center">
                    <?php require_once "{$resources}/view/includes/form.php"; ?>
                </div>
            </div>
        </div>
    </div>

<?php
require_once "{$resources}/view/layouts/footer.php";