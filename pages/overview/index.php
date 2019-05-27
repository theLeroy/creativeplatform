<?php

require_once('../../components/header/header.php');

require_once('../../components/searchbar/searchbar.php');

 ?>

<section class="flexcontainer">
  <article>
    <figure>
      <img src="" alt="Projekt Headerbild">
    </figure>
    <h2><?php  ?></h2>
    <p class="projectleader">von: <?php  ?></p>
    <h3>Teaser</h3>
    <p><?php  ?></p>
    <div class="projectneeds">
      <?php
        // All project objects and partners listed with following query:
        if ($result) {
        while ($needs = mysqli_fetch_array($result, MSQLI_ASSOC)) {
            echo(
              ""
              )
          }
        }
      ?>
    </div>
  </article>
</section>
