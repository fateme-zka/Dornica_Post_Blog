<?php
// include _head.php file
include("templates/_head.php");
?>

<?php
//include admin navbar
include('admin_templates/_admin-navbar.php');
?>

    <div class="d-flex flex-row">
        <?php
        //include admin sidebar
        include('admin_templates/_admin-sidebar.php');


        //include admin provinces management
        include('admin_templates/_provinces-management.php');
        ?>
    </div>

<?php
// include _foot.php file
include("templates/_foot.php");
?>