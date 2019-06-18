<?php include "include/header.php"?>
    <?php  include "../include/DB.php"?>
    <body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">لوحة التحكم</a>
    </div>
    <?php include "include/navbar.php"?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center">
                       اضافة فيئة
                    </h1>
                    <div class="col-xs-6">
                        <table class="table table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>لرقم</th>
                                <th>اسم الفيئة</th>
                                <th colspan="2">المعالجة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql="SELECT * FROM categories";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $catagory_title=$row['cat_title'];
                                echo"<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$catagory_title</td>";
                                echo "<td><a href='catagory.php?delete={$id}'>حذف</a></td>";
                                echo "<td><a href='catagory.php?Edit={$id}'>تعديل</a></td>";

                                echo "</tr>";
                            }
                            ?>


                            </tbody>
                        </table>


                    </div>
<div class="col-xs-6">
<?php include "include/function.php";?>
    <form action="" method="post">
        <div class="form-group">
            <label for="catagory" style="float: right;">اضافة اعلان</label>

            <input type="text" class="form-control" name="catagory" placeholder="يرجى ادخال الفيئة" dir="rtl">
            <br>
            <?php echo $error;
            ?>

            <input  class="btn btn-primary" type="submit" name="submit" value="اضافة فيئة">
        </div>
    </form>

    <?php

    if(isset($_GET['Edit']))
    {
        $cat_id=$_GET['Edit'];
        include "include/Editcatagory.php";
    }
    ?>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
        </div>
    </div>
    </nav>
</div>
    <!-- /#page-wrapper -->

<?php include "include/footer.php"?>