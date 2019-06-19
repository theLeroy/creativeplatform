<?php
  $sql = "SELECT projects.*, publish.users_id, users.username FROM publish
LEFT JOIN projects ON projects.id = publish.projects_id
LEFT JOIN users ON users.id = publish.users_id ORDER By id DESC;";
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
