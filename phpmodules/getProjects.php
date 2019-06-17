<?php
  $sql = "SELECT * FROM projects";
  $result = mysqli_query($conn, $sql);
  $i = -1;
  $prow = array();
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      $i++;
      while($row = mysqli_fetch_assoc($result)) {
        array_push($prow, $row);
      }
  } else {
      echo "0 results";
  }


 ?>
