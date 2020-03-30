
<?php include "includes/header.php" ?>

<body>
<!-- Navigation -->
<? include "includes/nav.php";?>
<link href="css/blog-post.css" rel="stylesheet">

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

            <h1 class="page-header">
                <!-- <small>All my posts can be found below!</small> -->
            </h1>

            <?

            if(isset($_GET['p_id'])){

                $post_id = $_GET['p_id'];
                $query = "SELECT * FROM posts WHERE post_id = $post_id";

            } else {
                $query = "SELECT * FROM posts";

            }


            $select_all_posts = mysqli_query($connection, $query);


            while($row = mysqli_fetch_assoc($select_all_posts)){

                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                ?>


            <div>
                <div class="header_posts">
                    <h2>
                        <a href="#"><? echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><? echo $post_author ?></a>
                    </p>
                    <p><span class=""></span><? echo " ".$post_date?> </p>
                    <hr>

                </div>

                <div class="blog-post-container">
                   <!-- <img class="img-responsive img-blog-post" src="  <? echo $post_image?>  " alt=""> -->
                    <p><? echo $post_content?> </p>


                </div>
            </div>
                <!--  Blog Posts -->

            <? } ?>

        </div>

        <!-- Blog Sidebar Widgets Column
        <?
        //include "includes/sidebar.php";
        ?>

            -->
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

