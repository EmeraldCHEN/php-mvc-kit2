<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">

<?php 

    $today = date("Y-m-d",time());

    foreach($data["staff"] as $staff) {

        $joined = $staff["JOINTEAM"];
        //$daysworked = $today - $joined;

        $daysworked = strtotime($today) - strtotime($joined);
        $totaldays = $daysworked / (60 * 60 * 24);

        ?>

        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo URLROOT . "images/" . $staff["STAFFIMAGE"] . ".png" ?>" alt="Card image cap">
                <div class="card-body">
                <h2 class="card-title"><a href="<?php echo URLROOT . "/onestaff/index/" . $staff['ID'] ?>"><?php echo $staff['STAFFNAME'] ?></a></h2>
                </div>
            </div>
        </div>

        <?php

    }

?>

</div>

<?php include(APPROOT . "/views/includes/footer2.php"); ?>