
<?php include ('arrays.php')?>
<ul>
<!--    <li><a href="index.php">Home</a></li>-->
<!--    <li><a href="team.php">Team</a></li>-->
<!--    <li><a href="menu.php">Menu</a></li>-->
<!--    <li><a href="contact.php">Contact</a></li>-->


    <?php

      foreach ($navItems as $item){
          echo "<li> <a href=\"$item[slug]\">$item[title]</a> </li>";
      }
    ?>
</ul>

