<form action="" method="post">
    <?php
    if(isset($_POST['submit']))
    {
        if($_POST['updatecatagory']==""||empty($_POST['updatecatagory']))
        {
            echo "fields must not be empty";

        }
    }

    ?>
    <div class="form-group">
        <label for="updatecatagory">Edit Catagory</label>
        <?php
        if(isset($_GET['Edit'])) {
            $edit = $_GET['Edit'];
            $query="SELECT * FROM categories where  id='$edit'";
            $execute = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($execute)) {
                $id = $row['id'];
                $catagory = $row['cat_title'];
                ?>
                <input value="<?php if(isset($catagory)){echo $catagory;}?> " type="text" class="form-control" name="updatecatagory"
                       placeholder="please enter your catagory">
                <?php
            }
        }
        ?>
        <?php
        if(isset($_POST['update']))
        {
            $catagory_title=$_POST['updatecatagory'];
            $sql="UPDATE categories set cat_title =' $catagory_title' where  id='$cat_id'";
            $updatequery=mysqli_query($conn,$sql);
            if(!$updatequery)
            {
                die("error in the query".mysqli_error($conn));
            }
            header("Location:catagory.php");

        }
        ?>






        <br>

        <?php echo $error;
        echo "<br>"?>
        <input  class="btn btn-primary" type="submit" name="update" value="update">
    </div>
</form>