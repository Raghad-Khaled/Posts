<?php
require('Database.php');
$DB_opt = Database::getInstance();
$conn = $DB_opt->getConnection();
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$select="SELECT ins_id,title,content from posts where ins_id="."'$id'";

$reselt=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($reselt);
//var_dump($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark ">
        <a class="navbar-brand" style="font-size:x-large;">
            <i class="fa fa-edit"></i>
         Edit your Post
        </a>
    </nav>

    <form class="container" method="POST" action="post.php" style="border: 2px solid black; border-radius: 10px; padding: 30px; margin-top: 30px;">
   
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title" value="<?=$row['title'] ?>" aria-describedby="emailHelp">
          
        </div>
        <div class="form-group">
          <label for="content">what do you think?</label>
          <textarea type="text" class="form-control" name="content" value="<?=$row['content'] ?>" aria-describedby="emailHelp"><?=$row['content'] ?></textarea>
        </div>
        <input type="hidden" name="ins_id" value="<?=$row['ins_id'] ?>">
        <button type="submit" name="save" class="btn btn-dark">Save</button>
        <button type="submit" name="cancle" class="btn btn-dark" style="margin-left: 85%;">Cancle</button>
      </form>

      <script src="script.js"></script>
</body>
</html>
<?php
mysqli_free_result($reselt);
mysqli_close($conn);
?>