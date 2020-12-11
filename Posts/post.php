
<?php
require('Database.php');

class post{
    private $_conn;

    public function __construct (){
      $DB_opt = Database::getInstance();
      $this->_conn = $DB_opt->getConnection();
    }
     
  
    public function creat($title,$content){
     $qury="INSERT INTO posts (title,content) VALUES ('$title','$content')";
     //echo $qury;
     $result= mysqli_query($this->_conn,$qury);
     //echo $result;
    }

    public function update($id,$title,$content){
        $qury=" UPDATE posts SET title='$title', content='$content' where ins_id='$id'";
       
        mysqli_query($this->_conn,$qury);

      }
    public function delete($id){
      $qury="DELETE FROM posts where ins_id='$id'";
      $result=mysqli_query($this->_conn,$qury);
    }
}

if(isset($_POST['share'])){
  $title =$_POST['title'];
  $content=$_POST['content'];
  echo $title;
  echo $content;
  $post=new post();
  $post->creat($title,$content);
  //var_dump($post);
  //die();
  header("Location:main.php");
}
if(isset($_POST['cancle'])){
  header("Location:main.php");
}
if(isset($_POST['save'])){
  $title =$_POST['title'];
  $content=$_POST['content'];
  $id=$_POST['ins_id'];

  $post=new post();
  $post->update($id,$title,$content);
  header("Location:main.php");
}

?>


