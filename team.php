<?php

    define("TITLE", "Team | Franklin's Fine Dating");
    include('includes/header.php');


?>

<div id="team-members" class="cf">
    <h1>Our team at franklins</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium fugiat labore magni maiores nam, nesciunt possimus suscipit. Beatae enim eos iure nemo. Alias corporis odit quas recusandae tenetur vel voluptatum?</p>
    <hr>

    <?php
     foreach ($teamMembers as $member){
    ?>

            <div class="member">
                <img src="img/<?php echo $member [img]; ?>.png" alt="<?php echo $member[name];?>">
                <h2><?php echo $member[name]; ?></h2>
                <p><?php echo $member[bio];?></p>

            </div>

    <?php
     }
    ?>
</div>
<hr>
<?php include('includes/footer.php');?>
