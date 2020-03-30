<?php

include "db.php";
?>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navigation_bar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand heading_white" href="../index.php">HOME</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?
                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection, $query);


                while($row = mysqli_fetch_assoc($select_all_categories)){
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_ID'];
                    echo "<li><a href='category.php?category=$cat_id'>".$cat_title."</a></li>";

                }
                ?>



            </ul>

            <div class="navbar-header navbar_element_right">

                <ul class ="nav navbar-nav">
                    <li><a href="../admin" class="float_right" > Admin</a></li>
                    <li><a href="../cms-login.php" class="float_right" > Login</a></li>

                </ul>
            </div>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


