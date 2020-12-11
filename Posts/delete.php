<?php
require('post.php');
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$post=new post();
$post->delete($id);

header("Location:main.php");
?>