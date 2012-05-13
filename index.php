<?php require_once ('config/config.php');?>

<?php
    include 'application/views/template/header.php';
?>

<div id="primary-content">

    <?php
        include 'application/views/posts/list.php';
    ?>

</div>

<div id="secondary-content">

    <?php
        include 'application/views/bloggers/list.php';
    ?>

</div>

<?php
    include 'application/views/template/footer.php';
?>