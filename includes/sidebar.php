<?php ?>

<div class="col-md-3">






    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>

        <form action="blog_search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">


                <button class="btn btn-default" type="submit" name ="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
                        </span>
        </div>

        </form>
        <!-- search form -->




        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">


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
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- LOGIN -->
    <div class="well">
        <h4>Login</h4>

        <form action="/includes/login.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
                <span class="input-group-btn">
                    <button class="btn btn-primary" name="login" type="submit">Submit
                    </button>
                </span>
            </div>


        </form>
        <!-- search form -->




        <!-- /.input-group -->
    </div>

    <!-- Side Widget Well
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

    -->

</div>
