<?php
	require_once 'connect.php';
      $query = "SELECT * FROM publications";
      $result = mysqli_query($db, $query);
      $rows = mysqli_num_rows($result);
      
      $flagArticle = true; 
      for($i = 0; $i <$rows; $i++){
            $row = mysqli_fetch_assoc($result);
            $type = $row["type"];
            if($type == 'article'){
                  if($flagArticle == true){
                       echo "<h5 class='subtitle-text'>Published Articles</h5>";  
                       $flagArticle = false;
                  }
                  $content = $row["content"];
                  echo "<p class='body-text indent'>$content</p>";
            }
      }

      $query = "SELECT * FROM publications";
      $result = mysqli_query($db, $query);
      $rows = mysqli_num_rows($result);

      $flagThesis = true; 
      for($i = 0; $i <$rows; $i++){
            $row = mysqli_fetch_assoc($result);
            $type = $row["type"];
            if($type == 'article'){
                  if($flagThesis == true){
                       echo "<h5 class='subtitle-text'>Thesis</h5>";  
                       $flagThesis = false;
                  }
                  $content = $row["content"];
                  echo "<p class='body-text indent'> $content</p>";
            }
      }
