<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
$pagetitle = 'Test';
$home = 'active';
$archeologie = '';
$contact = '';
$homeLink = 'active';
$archeologieLink = '';
$contactLink = '';
define('PAGETITLE', $pagetitle);
define('HOME', $home);
define('ARCHEOLOGIE', $archeologie);
define('CONTACT', $contact);
require_once 'resources/view/layouts/header.php';
?>



<?php
require_once 'resources/view/layouts/footer.php';
