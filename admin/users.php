<?php include "include/header.php"?>
<?php  include "../include/DB.php"?>
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
                            جميع الاعلانات
                        </h1>


<?php
if(isset($_GET['source']))
{
    $source=$_GET['source'];
}
else
{
    $source="";
}
switch ($source)
{
    case 'add-user';
    include "include/ADD_USERS.php";
    break;
    case "edit_user";
        include "include/edit_user.php";
        break;
        case"profile";
    include "profile.php";
    break;
    case "100";
    echo "100 OK";
    break;
    default:include "include/view_all_users.php";

}
?>
                        </div>
                </div>
            </div>
        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </nav>

<!-- /#page-wrapper -->

<?php include "include/footer.php"?>