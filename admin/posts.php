<?php session_start(); ?>


<? include "include/admin_header.php";?>
<? include "include/admin_navbar.php" ?>

<div id="wrapper">


    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage your Posts
                        <small>Author</small>
                    </h1>

                    <?

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];

                        switch ($source){
                            case 'add_post';
                                include "include/add_posts.php";
                                break;

                            case 'edit_post':
                                include "include/edit_post.php";
                                break;

                            default:
                        }

                    } else if($_GET['delete']){
                        $delete_id = $_GET['delete'];

                        $query = "DELETE FROM posts WHERE post_id = $delete_id ";
                        $delete_query = mysqli_query($connection,$query);

                        include "include/view_all_posts.php";
                    }

                    else {
                        include "include/view_all_posts.php";
                    }

                    ?>

                </div>
            </div>

        </div>

    </div>


</div>
<? include "include/admin_footer.php" ?>

