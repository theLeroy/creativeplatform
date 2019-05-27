<?php

require_once('../../components/header/header.php');

//require_once('../../components/searchbar/searchbar.php');


// Get all Data from Database
$result = mysqli_query(
  $dbconnect,
  "SELECT projects.*, partners.*, objects.* FROM projects
  LEFT JOIN partners ON projects.id = partners.projects_id
  LEFT JOIN objects ON projects.id = objects.projects_id");
?>

<section class="flexcontainer">
  <?php if($result) {
    while ($project = mysqli_fetch_array($result, MSQLI_ASSOC)) {?>
      <article>
        <figure>
          <img src="" alt="Projekt Headerbild">
        </figure>
        <h2><?php $project['name']; ?></h2>
        <p class="projectleader">von: <?php echo"peter flamingo";  ?></p>
        <h3>Teaser</h3>
        <p><?php $project['teaser']; ?></p>
        <div class="projectneeds">
          <?php
            // All project partners are listed with the following query:
            while ($partners = mysqli_fetch_array($result, MSQLI_ASSOC)) {
              echo(
                '<div class="box">
                  <img src="reply.svg" alt="Antwort auf das Angebot geben">
                  <p>Wir suchen:</p>'. $partners['function'] .'
                  <p>Wir bieten:</p>'. $partners['wage'] .'
                </div>'
              );
            };
            // All project objects are listed with the following query:
            while ($objects = mysqli_fetch_array($result, MSQLI_ASSOC)) {
              echo(
                '<div class="box">
                  <img src="reply.svg" alt="Antwort auf das Angebot geben">
                  <p>Wir suchen:</p>'. $objects['prop'] .'
                  <p>Wir bieten:</p>'. $objects['wage'] .'
                </div>'
              );
            };
          ?>
        </div>
      </article>
   <?php
    };
   };
   ?>
</section>
