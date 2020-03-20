
<?php include "includes/header.php" ?>


<body>
    <!-- Navigation -->
        <? include "includes/nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Welcome to my Blog
                    <!-- <small>All my posts can be found below!</small> -->
                </h1>

                <?

                if (isset($_POST['submit'])) {
                    $search = $_POST['search'];
                    //Search Database!
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                    $search_query =  mysqli_query($connection, $query);


                    if(!$search_query){
                        die("QUERY FAILED" . mysqli_error($connection));
                    }

                    $count = mysqli_num_rows($search_query);
                    if($count == 0){
                        echo "<H1>No Post found!</H1>";
                    } else if($count > 0) {

                while($row = mysqli_fetch_assoc($search_query)){

                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    ?>


                    <!--  Blog Posts -->
                    <h2>
                        <a href="#"><? echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="blog_search.php"><? echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span><? echo " ".$post_date?> </p>
                    <hr>

                    <img class="img-responsive" src="  <? echo $post_image?>  " alt="">
                    <hr>
                    <p><? echo $post_content?> </p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>


                <? }?>
             <? }?>
        <? }?>

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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php
include "includes/footer.php"
?>

