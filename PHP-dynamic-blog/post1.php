


<?php include("connection.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM blog_post where id = $id");
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

}
?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KB's Blog</title>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSS style sheet -->
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" type="img/png" href="favicon.png">

</head>

<body>


    <header class="header">
        <h1 class="blogname"><a href="#">KhudaBakhsh's blog</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
			</button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse flex-column">
                <div class="pf-section"><img src="images/images.jpg" alt="profile image"> </div>
                <p class="mb-3">Be strong and believe in your dreams, anything is possible.<br><a href="#">Read more</a></p>
                <figure>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </figure>

                <!--//social-list-->
                <hr>


                <ul class="navbar-nav flex-column">
                  <?php
                  
                  $arr = ["Home", "Blog Post", "About Me"];

                  foreach($arr as $row){
                      $icon ='';
                      $link ='';
                      
                    if($row == 'Home'){
                      $icon .='home';
                      $link .="index.php";
                    
                    }
                   if($row == 'Blog Post'){
                    $spin ='fa-spin';
                    $icon .= 'cog';
                    $link .="blog.php";
                   }
                   if($row == 'About Me'){
                       $icon .='user';
                       $spin ='';
                       $link .="about.php";
                    }

                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="'.$link.'"><i class="fas '.$spin.' fa-'.$icon.'"></i>

                        '.$row.'

                        </a></li>
                      ';
                  }
                    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cog fa-spin"></i>  Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html.index"><i class="fas fa-user"></i>  About Me</a>
                    </li> -->
                </ul>
                <div class="my-md-3">
                    <a class="btn btn-primary" target="_blank">Get in Touch</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="mainpage-wrapper">
        <section class="blog-list">
            <div class="container my-4">
            <h2 class="h1"><?php echo $result['post_title'];?></h2>
            <img class="img-fluid my-3" src="images/<?php echo $result['img']; ?>" alt="a cup of coffee" style="width: 700px; height: 300px;">
                <div class="item my-5 mb-5">
                    <div class="media">
                        <div class="media-body">
                        <p><?php echo $result['post_description']; ?></p>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

                

                </div>
        
        </section>







        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
