<?php
if(isset($_POST['checkboxArray']))
{
    foreach ($_POST['checkboxArray'] as $postvalue)
    {
   $bulk_option=$_POST['bulk_option'];
     switch ($bulk_option)
     {
         case 'بناتى':
             $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break;
             case'رجالى':
                  $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break;
          case'نسائى':
               $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break;
         case'ولادى':
              $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break;
         case"بيبى ولادى":
              $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break;
         case'بيبى بناتى':
              $query="UPDATE posts SET post_status='$bulk_option' WHERE post_id='$postvalue'";
             $update_status=  mysqli_query($conn, $query);
             break; 
             case 'حذف':
                  $query="DELETE  FROM  posts WHERE post_id='$postvalue'";
             $delete_status=  mysqli_query($conn, $query);
             break;
                 
             
     }
    }
}



?>
<form action="" method="post">
<table class=" table table-bordered table-hover">
      <div id="bulkOptionContainer">
          <select  class="form-control" width="0" id="" name="bulk_option">
              <option value="">اختار قئة</option>
              <option value="بناتى">بناتى</option>
              <option value="نسائى">نسائى</option>
              <option value="ولادى">ولادى</option>
              <option value="رجالى">رجالى</option>
              <option value="بيبى ولادى">بيبى ولادىى</option>
              <option value=" بيبى بناتى">بيبى بناتى</option>
              <option value="حذف">حذف</option>
          </select>
      </div>
      <br>
      <div class="col-xs-4">
          <input type="submit" name="submit" class="btn btn-success" value="تنفيذ">
          <a class="btn btn-primary" href="posts.php?source=ADD_POST">اضافة اعلان جديد</a>
      </div>

      
                                <thead>
                                <tr>
                                    <th><input id="selectallboxes" type="checkbox"</th>
                                    <th>رقم القطعة</th>
                                    <th>البائع</th>
                                    <th>اسم القطعة</th>
                                    <th>رقم الفئة</th>
                                    <th>الفيئة</th>
                                    <th>الصورة</th>
                                    <th>التاريخ</th>
                                    <th>السعر</th>
                                    <th>المقاس</th>
                                   <th>شرح عن المنتج</th>
                                    <th colspan="2">العملية</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $query="SELECT * From posts";
                                $postresult=mysqli_query($conn,$query);
                                if(!$postresult)
                                {
                                    echo "Error in the query".mysqli_error($conn);
                                }
                                while($row=mysqli_fetch_assoc($postresult)) {
                                    $post_id = $row['post_id'];
                                    $author = $row['Author'];
                                    $post_content=$row['post_content'];
                                    $post_title = $row['post_title'];
                                    $post_catagory_id = $row['post_catagory_id'];
                                    $status = $row['post_status'];
                                    $post_image = $row['post_image'];
                                    $post_tags = $row['post_tags'];
                                    $post_date = $row['post_date'];
                                    $price=$row['price'];
                                    $size=$row['size'];
                                    echo "<tr>";
                                    ?>
                                <td> <input class='checkboxes' type="checkbox" name='checkboxArray[]' value="<?php echo $post_id?>"</td>
                                    <?php
                                    echo "<td> $post_id</td>";
                                    echo "<td>$author</td>";
                                    echo "<td> $post_title</td>";
                                    echo "<td>  $post_catagory_id</td>";
                                    echo "<td> $status</td>";
                                    echo "<td> <img width='100' src='../upload/categories_pic/$post_image' </td>";
                                    echo "<td> $post_date</td>";
                                    echo "<td> $price</td>";
                                    echo "<td> $size</td>";
                                    echo "<td>$post_content</td>";
                                    echo "<td><a  onClick=\"javascript:return confirm('are u sure u want to delete');\" href='posts.php?delete={$post_id}'>حذف</a></td>";
                                    echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>تعديل</a></td>";
                                    echo "</tr>";
                                }
                                if(isset($_GET['delete'])) {
                                    $post_id=$_GET['delete'];
                                    $query="DELETE FROM posts where post_id='$post_id'";
                                    $result=mysqli_query($conn,$query);
                                    header("Location:posts.php");
                                }

                                ?>

                                </tbody>
                            </table>
</form
<?php
include"include/footer.php";
?>