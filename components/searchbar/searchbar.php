<?php
if(isset($_POST['searchbar'])) {
  $searchkey = $_POST['searchbar'];

  $query = mysqli_query()
}
 ?>

<section id="search">
  <form class="" action="searchbar.php" method="post">
    <input type="text" name="searchbar" placeholder="Suche nach Projekten, Organisatoren oder Stichwörtern..." id="search_box">
    <input type="submit" name="submit" id="search_button">
  </form>
</section>
