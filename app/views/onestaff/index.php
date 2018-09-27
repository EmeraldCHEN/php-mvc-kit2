<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">

<?php 

    $today = date("Y-m-d",time());

    foreach($data["onestaff"] as $staff) {

        $joined = $staff["JOINTEAM"];
        //$daysworked = $today - $joined;

        $daysworked = strtotime($today) - strtotime($joined);
        $totaldays = $daysworked / (60 * 60 * 24);

        ?>

        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo URLROOT . "images/" . $staff["STAFFIMAGE"] . ".png" ?>" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $staff['STAFFNAME'] ?></h2>
                    <h3 class="card-title">Worked here <?php echo $totaldays ?> Days</h3>
                    <p class="card-text"><?php echo $staff['STAFFBIO'] ?></p>
                </div>
            </div>
        </div>

        <?php

    }

?>

</div>

<?php include(APPROOT . "/views/includes/footer2.php"); ?>