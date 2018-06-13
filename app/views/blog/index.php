<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">

<?php 

    foreach($data["posts"] as $post) {

        ?>

            <div class="col-sm-12">
                <h1><?php echo $post["TITLE"]; ?></h1>
                <p><?php echo $post["CONTENT"]; ?></p>
            </div>

        <?php

    }

?>

</div>

<?php include(APPROOT . "/views/includes/footer2.php"); ?>