<?php
	require_once 'connect.php';
      $query = "SELECT * FROM homepage";
      $result = mysqli_query($db, $query);
      $rows = mysqli_num_rows($result);
      
      for($i = 0; $i <$rows; $i++){
            echo "<p class='body-text'>";
            $row = mysqli_fetch_assoc($result);
            $content = $row["content"];
            echo "$content</p>";
      }
   	  