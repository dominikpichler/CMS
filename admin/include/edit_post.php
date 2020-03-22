
<?php session_start(); ?>




<?php

include "admin_header.php";



if(isset($_GET['source'])){



 $post_id = $_GET['p_id'];





//FILL STUFF IN FORM!! (VALUE)



    $query = "SELECT * FROM posts WHERE post_id = $post_id";
    $select_posts_byID = mysqli_query($connection, $query);


    while($row = mysqli_fetch_assoc($select_posts_byID)) {
        $post_category_id = $row['post_category_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];
        $post_comments = $row['post_comments'];
        $post_status = $row['post_status'];
        $post_comment_count = $row['post_comment_count'];

    }
}




if(isset($_POST['update_post'])){

    $post_id = $_POST['post_id'];
    $post_category_id = $_POST['post_category_id'];
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_date = date("d-m-y");
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_comments = $_POST['post_comments'];
    $post_status = $_POST['post_status'];
    $post_comment_count = 4;

    move_uploaded_file($post_image_temp,"../img/$post_image");






//Keep Image!

    /*
    if(empty($post_image)){
        $query_img = "SELECT * FROM posts WHERE post_id = $post_id";

        $select_image = mysqli_query($connection,$query_img);

        while($row = mysqli_fetch_assoc($select_image)){
            $post_image = $row['post_image'];
        }

    }

    */

    /*
        $query = "INSERT INTO posts(post_category_id, post_title,post_author,
                    post_date,post_image,post_content,post_tags,post_comment_count,post_status) ";
        $query .= "VALUES($post_category_id,'$post_title','$post_author'
                    ,now(),'$post_image_temp','$post_content','$post_tags','$post_comment_count','$post_status')";
    */



    $query = "UPDATE posts SET ";
    $query .= "post_category_id = '$post_category_id', ";
    $query .= "post_title = '$post_title', ";
    $query .= "post_author = '$post_author', ";
    $query .= "post_date = now(), ";
    $query .= "post_image = '$post_image', ";


    $query .= "post_tags = '$post_tags', ";
    $query .= "post_content = '$post_content', ";
    $query .= "post_status = '$post_status', ";
    $query .= "post_comment_count = 0 ";
    $query .= "WHERE post_id = $post_id";
    $query_sendPost = mysqli_query($connection,$query);


}


?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_title"> Post Title</label>
        <input type="text" class="form-control" name ="post_title" value="<?echo $post_title;?>">
    </div>

    <div class="form-group">
        <label for="post_author"> Post Author</label>
        <input type="text" class="form-control" name ="post_author" value="<?echo $post_author;?>">
    </div>


    <div class="form-group">


        <label for="post_category"> Post Cateogry</label><br>
        <select multiple  class="form-control" id="exampleFormControlSelect1" name="post_category" id="post_category">
            <?
            $query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($connection, $query);


            while($row = mysqli_fetch_assoc($select_all_categories)){
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
                echo "<option value ='$cat_id'>$cat_title</option>";
            }
            ?>


        </select>





    </div>


    <div class="form-group">
        <label for="post_status"> Post Status</label>
        <input type="text" class="form-control" name ="post_status" value="<?echo $post_status;?>">
    </div>


    <div class="form-group">
        <label for="post_status"> Post Image</label>
        <input type="file" name ="image" value="<?echo $post_image;?>">
    </div>


    <div class="form-group">
        <img style="max-width: 200px" src="../<?echo $post_image;?>" alt="">
    </div>


    <div class="form-group">
        <label for="post_tags"> Post Tags</label>
        <input type="text" class="form-control" name ="post_tags" value="<?echo $post_tags;?>">
    </div>


    <div class="form-group">
        <label for="post_content"> Post Content</label>
        <textarea name="post_content" id="" cols="30" rows="10" class="form-control"><?echo $post_content;?></textarea>
    </div>


    <div class="form-group">
        <input type="submit" name="update_post" class="btn btn-primary" value="Update Post">
    </div>

</form>
