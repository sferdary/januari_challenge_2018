<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
$pagetitle = 'Bla';
//RESOURCES
$resources = '../../resources';

//NAVIGATION
$home = '';
$archeologie = 'active';
$contact = '';

$homeLink = '../../';
$archeologieLink = '';
$contactLink = '../contact';

define('PAGETITLE', $pagetitle);

define('RESOURCES', $resources);

define('HOME', $home);
define('ARCHEOLOGIE', $archeologie);
define('CONTACT', $contact);

define('HOMELINK', $homeLink);
define('ARCHLINK', $archeologieLink);
define('CONTACTLINK', $contactLink);

require_once "{$resources}/view/layouts/header.php";
?>
    <div class="row home-content-row">
        <div class="col-sm sub-content-col">
            <div class="empty"></div>
            <p class="post-date">
                19 januari 2019
            </p>
            <a href="#"><p class="post-title">
                    TIS WEER LENTE
                </p></a>
        </div>
    </div>


<?php
require_once "{$resources}/view/layouts/footer.php";
