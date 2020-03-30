
<?php include "includes/header.php" ?>



<div class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light">WELCOME TO MY BLOG</h1>
                <p class="lead">All about Desgin,Development & Art</p>
            </div>
        </div>
        <section id="section03" class="demo">
            <a href="#page_start"><span></span>Scroll</a>
        </section>
    </div>
</div>





<body>
    <!-- Navigation -->
        <? include "includes/nav.php";?>

    <!-- Page Content -->
    <div class="container -anchor" id="page_start">

        <div class="row">

            <div class="col-md-12">
                <h1 class="page-header">
                    RECENT WORK          <!-- <small>All my posts can be found below!</small> -->
                </h1>
            </div>

            <!-- Blog Entries Column -->
            <div class="col-md-10">



                <?

                $query = "SELECT * FROM posts";
                 $select_all_posts = mysqli_query($connection, $query);

                 $post_type = 0;

                while($row = mysqli_fetch_assoc($select_all_posts)){

                    if($post_type == 0) {
                        $post_type = 1;
                    } else if ($post_type == 1){
                        $post_type = 0;
                    }



                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];




                    if($post_type == 0){

                        echo" <!--  Blog Posts Type 0 -->
                        <div class =\"blog-container\">
        
                            <div class=\"col-md-6 
                            \" style=\"height: 400px\">
                                <h2>
                                    <a href=\"#\">$post_title </a>
                                </h2>
                                <p class=\"lead\">
                                    by <a href=\"index.php\"> $post_author </a>
                                </p>
                               <!--  <p><span class=\"glyphicon glyphicon-time\"></span>$post_date </p> -->
                                <hr>
                                <p class='text'>$post_content</p>
                                <a class=\"btn btn-primary btn-motion\" href=\"post.php?p_id=$post_id\">Read More </a>
        
        
                            </div>
        
                                <!--  Image Posts -->
        
                                <div class=\"col-md-6 blogpost_image_right\">
                                    <img style=\"height: 100%; width: 100%\" class=\"img-responsive_right\" src=\" $post_image \" alt=\"\">
        
                                </div>
        
                        </div>";


                 } else if($post_type == 1) {
                        echo "<!--  Blog Posts Type 1 -->
                        <div class =\"blog-container\" style=\"height: 400px\">

                            <!--  Image Posts -->

                            <div class=\"col-md-6 blogpost_image_left\">
                                <img style=\"height: 100%; width: 100%\" class=\"img-responsive_left\" src=\" $post_image \" alt=\"\">

                            </div>


                            <div class=\"col-md-6 blog_preview_text_right\" >
                                <h2>
                                    <a href=\"#\">$post_title</a>
                                </h2>
                                <p class=\"lead\">
                                    by <a href=\"index.php\"> $post_author</a>
                                </p>
                              <!--  <p><span class=\"glyphicon glyphicon-time\"></span> $post_date </p> -->
                                <hr>
                                <p class='text'>$post_content </p>
                                <a class=\"btn btn-primary btn-motion\" href=\"post.php?p_id=$post_id\">Read More</a>


                            </div>



                        </div>";

                    }
                }
                ?>


            </div>



            <!-- Blog Sidebar Widgets Column -->
            <? include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Custom -->
    <script src="js/custom.js"> </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php
include "includes/footer.php"
?>

</html>
