
<?php include "includes/header.php" ?>



<body>
    <!-- Navigation -->
        <? include "includes/nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h1 class="page-header">
                    <!-- <small>All my posts can be found below!</small> -->
                </h1>

            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-10">



                <?

                if(isset($_GET['category'])){

                $cat_id = $_GET['category'];
                }




                $query = "SELECT * FROM posts WHERE post_category_id = $cat_id";



                 $select_all_posts = mysqli_query($connection, $query);


                while($row = mysqli_fetch_assoc($select_all_posts)){

                   $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    ?>



                <!--  Blog Posts -->
                <h2>
                    <a href="post.php?p_id=<?echo $post_id?>"><? echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><? echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><? echo " ".$post_date?> </p>
                <hr>

                     <img class="img-responsive" src="  <? echo $post_image?>  " alt="">
                <hr>
                <p><? echo $post_content?> </p>
                <a class="btn btn-primary" href="post.php?p_id=<?echo $post_id?>">Read More</a>

                <hr>

                <? } ?>








            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="sidebar_cat">
            <? include "includes/sidebar.php"; ?>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php
include "includes/footer.php"
?>

</html>
