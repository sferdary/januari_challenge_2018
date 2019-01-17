<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 17/01/2019
 * Time: 09:13
 */

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav text-center">
            <li class="nav-item">
                <a class="nav-link <?php echo HOME ?>" href="<?php echo HOMELINK?>">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ARCHEOLOGIE ?>" href="<?php echo ARCHLINK?>">ARCHEOLOGIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo CONTACT ?>" href="<?php echo CONTACTLINK?>">CONTACT</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 ">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
                <form class="form-inline nav-form">
                    <input class="form-control form-control-sm mr-3" type="text" placeholder="Search"
                           aria-label="Search">
                </form>
            </li>
            <li><br></li>
            <li class="nav-item">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
            </li>
        </ul>
    </div>
</nav>