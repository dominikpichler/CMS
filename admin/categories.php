<? include "include/admin_header.php";?>



<div id="wrapper">

    <? include "include/admin_navbar.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">


                        <?
                        if(isset($_POST['submit'])){
                        $cat_title = $_POST['cat_title'];

                            if($cat_title == "" || empty($cat_title)){
                                echo"<p> Empty not good bro</p>";
                            } else {

                                $query = "INSERT INTO categories(cat_title) ";
                                $query .= "VALUE ('{$cat_title}')";
                                $create_category_query = mysqli_query($connection,$query);

                                if(!$create_category_query){
                                    die("Help".mysqli_error());
                                }




                            }

                        }

                        ?>






                        <form action=" " method="post">
                            <div class="form-group">

                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class ="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>

                    </div>


                    <div class="col-xs-6">

                        <?

                        //Find all categories
                        $query = "SELECT * FROM categories";
                        $select_categories = mysqli_query($connection, $query);






                        ?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?
                            while($row = mysqli_fetch_assoc($select_categories)){
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['cat_ID'];

                                echo "<tr>";
                                echo "<td>".$cat_id."</td>";
                                echo "<td>".$cat_title."</td>";
                                echo "<td><a  href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>



                        <?
                        if(isset($_GET['delete'])){

                         $del_cat_id = ($_GET['delete']);
                         $query_delete = "DELETE FROM categories WHERE cat_id = {$del_cat_id}";
                         $delete_query = mysqli_query($connection,$query_delete);
                         echo "<script> window.location.href = /categories.php </script>";


                         //header("Location: categories.php");


                        }





                        ?>

                    </div>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>


</div>

