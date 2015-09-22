<?php
if (!is_active_sidebar('header-right')) {
    return;
} ?>


    <button href="#" class="js-drop-panel dropdown-btn material-icons u-absolute u-p1/2 u-text-white u-round u-top u-z4 u-m2 u-right">account_circle</button>
    <div class="dropdown-menu-basic dropdown-right u-text-black">
        <?php dynamic_sidebar('header-right'); ?>
    </div>
