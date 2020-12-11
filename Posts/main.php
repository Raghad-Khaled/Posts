
<!DOCTYPE html>
<?php
 require('Database.php');
  $DB_opt = Database::getInstance();
   $_conn = $DB_opt->getConnection();
   if(!$_conn)
   {
     mysqli_connect_error();
     exit;
   }
  $quary="select * from posts";
  $result=mysqli_query($_conn,$quary);
  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    a{
        font-size: large;
    }

</style>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="add.php" style="font-size:x-large;">
        <i class="fa fa-plus-circle"></i>
      Add Post
    </a>
  </nav>
  <?php
  while($row=mysqli_fetch_assoc($result)){

  ?>

  <div  class="card" style="width: 30rem; margin: auto; margin-top: 30px; ">
    <div class="card-body">
      <h5 class="card-title" id="1T"><?=$row['title'] ?></h5>
      
      <p class="card-text" id="1C"><?=$row['content'] ?></p>
      <a  href="edit.php?id=<?=$row['ins_id']?>" class="card-link edit" style="font-size:x-large;"> <i class="fa fa-edit"></i> Edit </a>
      <a href="delete.php?id=<?=$row['ins_id']?>" id="1btn" class="card-link delete" style="font-size:x-large;"> <i class="fa fa-trash"></i> Delete </a>
    </div>
  </div>
  <?php
  }
  ?>

  
    
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($_conn);
?>