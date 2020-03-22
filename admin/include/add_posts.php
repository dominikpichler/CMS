<?php session_start(); ?>
<?php include "admin_header.php"; ?>


<?php
if(isset($_POST['create_post'])){

    $post_id = $_POST['post_id'];
    $post_category_id = $_POST['post_category'];


    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];

    $post_date = date("d-m-y");

    $post_image = ($_FILES['post_image']['name']);
    $post_image_temp = $_FILES['post_image']['tmp_name'];



    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_comments = $_POST['post_comments'];
    $post_status = $_POST['post_status'];
    $post_comment_count = 4;


    move_uploaded_file($post_image_temp,"../img/$post_image");
    $post_image = "../img/".$post_image;



    $query = "INSERT INTO posts(post_category_id, post_title,post_author,
                post_date,post_image,post_content,post_tags,post_comment_count,post_status) ";
    $query .= "VALUES($post_category_id,'$post_title','$post_author'
                ,now(),'$post_image','$post_content','$post_tags','$post_comment_count','$post_status')";

    $query_sendPost = mysqli_query($connection,$query);



}


?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_title"> Post Title</label>
        <input type="text" class="form-control" name ="post_title">
    </div>

    <div class="form-group">
        <label for="post_author"> Post Author</label>
        <input type="text" class="form-control" name ="post_author">
    </div>






    <div class="form-group">

        <label for="post_category"> Post Cateogry</label><br>
        <select class="form-control" name="post_category" id="post_category">
            <?
            $query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($connection, $query);


            while($row = mysqli_fetch_assoc($select_all_categories)){
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_ID'];
                echo "<option value ='$cat_id'>$cat_title</option>";
            }
            ?>
        </select>

    </div>


    <div class="form-group">
        <label for="post_status"> Post Status</label>
        <input type="text" class="form-control" name ="post_status">
    </div>

    <div class="form-group">
        <label for="post_image"> Post Image</label>
        <label class="custom-file-label" for="validatedCustomFile"></label>
        <input  class="custom-file-input" id="validatedCustomFile" name="post_image" type="file">
    </div>

    <div class="form-group">
        <label for="post_tags"> Post Tags</label>
        <input type="text" class="form-control" name ="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content"> Post Content</label>
        <textarea name="post_content" id="" cols="30" rows="10" class="form-control">

        </textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="create_post" class="btn btn-primary" value="Publish Post">
    </div>

</form>
