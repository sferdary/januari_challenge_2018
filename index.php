<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

$pagetitle = 'Home';
$resources = 'resources';
$home = 'active';
$archeologie = '';
$contact = '';
$homeLink = '';
$archeologieLink = 'pages/archeologie';
$contactLink = 'pages/contact';
$arrow_right = 'pages/archeologie';

require_once 'includes/handlers/definition_handler.php';
require_once "{$resources}/view/layouts/header.php";
?>
    <a href="<?php echo ARROW_RIGHT; ?>">
        <button type="button" class="btn btn-dark" id="right">→</button>
    </a>
    <div class="row home-content-row">
        <div class="col-sm home-content-col">
            <div class="empty"></div>
            <p class="post-date">
                19 januari 2019
            </p>
            <a href="#"><p class="post-title">
                    TIS WEER LENTE
                </p></a>
        </div>
        <div class="col-sm home-content-col">
            <div class="empty"></div>
            <p class="post-date">
                19 januari 2019
            </p>
            <a href="#"><p class="post-title">
                    VERDER KIJKEN
                </p></a>
        </div>
        <div class="col-sm home-content-col">
            <div class="empty"></div>
            <p class="post-date">
                19 januari 2019
            </p>
            <a href="#"><p class="post-title">
                    BACKPACKING
                </p></a>
        </div>
    </div>
    <div class="row home-content-row">
        <div class="col-sm home-content-col">
            <div class="empty"></div>
            <p class="post-date">
                19 januari 2019
            </p>
            <a href="#"><p class="post-title">
                    WILDCAMPEREN
                </p></a>
        </div>
        <div class="col-sm hidden-home-content-col">

        </div>
        <div class="col-sm hidden-home-content-col">

        </div>
    </div>
<?php
require_once "{$resources}/view/layouts/footer.php";