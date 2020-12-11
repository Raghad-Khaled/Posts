<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark ">
        <a class="navbar-brand" style="font-size:x-large;">
            <i class="fa fa-clipboard"></i>
         Creat your Post
        </a>
    </nav>

    <form class="container " method="POST" action="post.php" style="border: 2px solid black; border-radius: 10px; padding: 30px; margin-top: 30px;">
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
          
        </div>
        <div class="form-group">
          <label for="content">what do you think?</label>
          <textarea type="text" class="form-control" name="content" id="content"></textarea>
        </div>
    
        <button type="submit" name="share" class="btn btn-dark">Share</button>
        <button type="submit" name="cancle" class="btn btn-dark" style="margin-left: 85%;">Cancle</button>
      </form>

    
</body>
</html>