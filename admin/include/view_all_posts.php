<?php session_start(); ?>

<table class="table table-bordered table-hover">

    <thead>
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>TItle</th>
        <th>Category</th>
        <th>Status</th>
        <th>Images</th>
        <th>Tags</th>
        <th> Comments</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>


    <?

    //Find all categories
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);


    while($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
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


        echo "<tr>";

        echo "<td>".$post_id."</td>";
        echo "<td>".$post_author."</td>";
        echo "<td>".$post_title."</td>";


        //Get Catgeory-Name based on Cat_ID

            $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
            $select_categories = mysqli_query($connection,$query);


            while ($row = mysqli_fetch_assoc($select_categories)){
                $cat_id = $row['cat_ID'];
                $cat_title = $row['cat_title'];


            }



        echo "<td>".$cat_title."</td>";
        echo "<td>".$post_status."</td>";
        echo "<td>"."<img style='max-width: 150px' class='img-responsive' alt='' src='../".$post_image."'>"."</td>";
        echo "<td>".$post_tags."</td>";
        echo "<td>".$post_comment_count."</td>";
        echo "<td>".$post_date."</td>";
        echo "<td><a href='posts.php?source=edit_post&p_id=$post_id'> Edit </a></td>";
        echo "<td><a href='posts.php?delete=$post_id'> Delete </a></td>";
        echo "</tr>";







    }
    ?>

    </tbody>

</table>