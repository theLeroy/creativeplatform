<?php

require_once('../../components/header/header.php');

//require_once('../../components/searchbar/searchbar.php');


$success = dbconnect(); // DB Connection
// Get all Data from Database
$result_needs = mysqli_query(
  $db,
  "SELECT projects.*, partners.*, objects.* FROM projects
  RIGHT JOIN partners ON partners.project_id = projects.id
  RIGHT JOIN objects ON objects.project_id = projects.id"
);
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
        if ($result_needs) {
          // All project partners are listed with the following query:
          while ($partners = mysqli_fetch_array($result_needs, MSQLI_ASSOC)) {
            echo(
              '<div class="box">
                <img src="reply.svg" alt="Antwort auf das Angebot geben">
                <p>Wir suchen:</p>'. $partners['function'] .'
                <p>Wir bieten:</p>'. $partners['wage'] .'
              </div>'
            );
          };
          // All project objects are listed with the following query:
          while ($objects = mysqli_fetch_array($result_needs, MSQLI_ASSOC)) {
            echo(
              '<div class="box">
                <img src="reply.svg" alt="Antwort auf das Angebot geben">
                <p>Wir suchen:</p>'. $objects['prop'] .'
                <p>Wir bieten:</p>'. $objects['wage'] .'
              </div>'
            );
          };
        };
      ?>
    </div>
  </article>
</section>
