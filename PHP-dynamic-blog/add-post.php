<?php

include_once("connection.php");
// var_dump($conn); 


if(isset($_POST['submit'])){
  $post_title = $_POST['post_title'];
  $post_description = $_POST['post_description'];

  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
  $extensions= array("jpeg","jpg","png");



  if(in_array($file_ext,$extensions)=== false){
    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 }

 

 if($file_size > 2097152){
  $errors[]='File size must be excately 2 MB';
}


if(empty($errors)==true){
  move_uploaded_file($file_tmp,"images/".$file_name);
  // echo "Success";
}




  $conn->exec("INSERT INTO blog_post(post_title, post_description, img) VALUES ('$post_title', '$post_description', '$file_name')");



//  echo $post_title;
//  echo $post_description;



  if($conn){
    echo "New record created successfully";
  }
  
  else{
    echo "If there is a problem";
  }

}



// use exec() because no results are returned





 ?>

 <form action="" method="post" enctype="multipart/form-data">
 <input type="text" name="post_title">
<br>
 <input type="file" name="image">
   <br>
 <textarea name="post_description" cols="30" rows="10"></textarea>
   <br>
  <input type="submit" name="submit" value="Add post">
  </form>