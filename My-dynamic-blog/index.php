<?php
$page = "index.html";

include("connection.php");


$stmt = $conn->prepare("SELECT * FROM blog_post");
$stmt->execute();



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
                    if($row == 'Home'){
                      $icon .='home';
                    }
                   if($row == 'Blog Post'){
                    $spin ='fa-spin';
                    $icon .= 'cog';
                   }
                   if($row == 'About Me'){
                       $icon .='user';
                       $spin ='';
                    }

                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas '.$spin.' fa-'.$icon.'"></i>

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
        <section class="template-section theme-bg-light py-5">
            <div class="container">
                <h2 class="heading">Welcome to my new blog.</h2>
                <p class="paragraph">If you have any question about more information then subscrib here. &darr;</p>
                <form class="signup-form form-inline">
                    <div class="form-group">
                        <label for="uremail"></label>
                        <input type="email" id="uremail" name="uremail" class="form-control" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
            <!--container Section-->
        </section>
        <section class="blog-list">
            <div class="container">
                <?php while($result = $stmt->fetch(PDO::FETCH_ASSOC)){

                
                ?>
                <div class="item mb-5">
                    <div class="media">
                        <img class="img-fluid" src="images/<?php echo $result['img']; ?>" alt="a cup of coffee">
                        <div class="media-body">
                            <h3 class="title"><a href="#"><?php echo $result['post_title']; ?></a></h3>
                            <div class="social"><span class="date">Published 6 days ago, </span><span class="time"> 34 min read,</span><span class="comment"><a href="#"> 41 comments</a></span></div>
                            <p class="paragraph"><?php echo substr($result['post_description'], 0 , 200);?></p>
                            <a class="more-link" href="post1.php?id=<?php echo $result['id']; ?>">Read more &raquo;</a>
                        </div>
                    </div>
                </div>
                <?php }
                    
                    ?>
                
                <!--item-->
                <!-- <div class="item mb-5">
                    <div class="media">
                        <img class="img-fluid" src="image2.jpg" alt="second columns image">
                        <div class="media-body">
                            <h3 class="title"><a href="#">Python Developer job description template.</a></h3>
                            <div class="social"><span class="date">Published 4 days ago, </span><span class="time"> 23 min read,</span><span class="comment"><a href="#"> 23 comments</a></span></div>
                            <p class="paragraph">This Python Developer job description template includes the list of most important Python Developer's duties and responsibilities. It is customizable and ready to post to job boards.</p>
                            <a class="more-link" href="post1.html">Read more &raquo;</a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="item mb-5">
                    <div class="media">
                        <img class="img-fluid" src="image3.png" alt="Third columns image">
                        <div class="media-body">
                            <h3 class="title"><a href="#">Software Developer Duties & Responsibilities.</a></h3>
                            <div class="social"><span class="date">Published 7 days ago, </span><span class="time"> 5 min read,</span><span class="comment"><a href="#"> 45 comments</a></span></div>
                            <p class="paragraph">Developers can work in systems software or in applications such as those for mobile devices, but their duties are similar in many cases....</p>
                            <a class="more-link" href="blog-post.html">Read more &raquo;</a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="item mb-5">
                    <div class="media">
                        <img class="img-fluid" src="image4.jpg" alt="This is a mackbook">
                        <div class="media-body">
                            <h3 class="title"><a href="#">HTML5 Developer job description template.</a></h3>
                            <div class="social"><span class="date">Published 8 days ago, </span><span class="time"> 54 min read,</span><span class="comment"><a href="#"> 43 comments</a></span></div>
                            <p class="paragraph">This HTML5 Developer job description template includes the list of most important HTML5 Developer 's duties and responsibilities. It is customizable and ready to post to job boards. Use it to save time, attract qualified candidates
                                and hire best employees</p>
                            <a class="more-link" href="blog-post.html">Read more &raquo;</a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="item mb-5"> -->
                    <!-- <div class="media">
                        <img class="img-fluid" src="image5.jpg" alt="Fifth columns image">
                        <div class="media-body">
                            <h3 class="title"><a href="#">Bootstrap · The most popular HTML, CSS, and JS library in the world.</a></h3>
                            <div class="social"><span class="date">Published 5 days ago, </span><span class="time"> 34 min read,</span><span class="comment"><a href="#"> 9 comments</a></span></div>
                            <p class="paragraph">Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins</p>
                            <a class="more-link" href="https://getbootstrap.com">Read more &raquo;</a>
                        </div>  
                    </div> -->


                   
                    <div class="previous-next mb-5">
                        <a class="next btn" href="page1.html">Next &rarr;</a>
                    </div>

                <!-- </div> -->

                

                </div>

        <footer class="footer py-2">
            <small class="copyright">Designed &copy; 2020 by <a href="#">Khuda Bakhsh Bugti <i class="fas fa-heart"></i> </a></small>
        </footer>
        
        </section>







        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
