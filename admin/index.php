<?php include "include/header.php"?>
<body>

    <div id="wrapper">
<?php
$session=  session_id();
$time=time();
$time_out_in_second=60;
$timeout=$time-$time_out_in_second;
$query="SElECT * FROM user_online where session='$session'";
$send_query=  mysqli_query($conn, $query);
$count=  mysqli_num_rows($send_query);
if($count==NULL)
{
    mysqli_query($conn, "INSERT INTO user_online(session,time) values('$session','$time')");
}
 else {
     mysqli_query($conn, "UPDATE  user_online SETtime='$time' where session='$session'");
}
$user_online_query=  mysqli_query($conn, "SELECT * from user_online where time >'$timeout'");
$user_count=  mysqli_num_rows($user_online_query);
global $user_count;
?>
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
                        <h1 class="page-header">
                            مرحبا بك
                            <small><?php echo
                                $_SESSION['username']?></small>
                        </h1>
                        
                       
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-file-text fa-5x"></i>
                                            </div>
                                            <?php

                                            $query="SELECT * FROM posts";
                                            $select_all_post=mysqli_query($conn,$query);
                                            $post_count=mysqli_num_rows($select_all_post);
                                            ?>
                                            <div class="col-xs-9 text-right">
                                                <div class='huge'><?php echo $post_count?></div>
                                                <div>الاعلانات</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="./posts.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">عرض البيانات</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>


<?php
$query="SELECT * FROM users";
$select_all_users=mysqli_query($conn,$query);
$user_count=mysqli_num_rows($select_all_users);
?>

                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class='huge'><?php echo $user_count?></div>
                                                <div> المستخدمين</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="users.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">عرض البيانات</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $query="SELECT * FROM categories";
                            $select_all_catagories=mysqli_query($conn,$query);
                            $catagory_count=mysqli_num_rows($select_all_catagories);
                            $catagory_count=mysqli_num_rows($select_all_catagories);
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-list fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class='huge'><?php echo $catagory_count?></div>
                                                <div>الفئات</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="catagory.php">
                                        <div class="panel-footer">
                                            <span class="pull-left">عرض البيانات</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
['Data','Count'],
                                <?php
                                $elements_text=['active_posts','users','catagories'];
                                $elements_count=[$post_count,$user_count,$catagory_count];
                                for($i=0;$i<3;$i++)
                                {
                                    echo"['{$elements_text[$i]}'".",". "{$elements_count[$i]}],";
                                }
                                ?>
                            ]);

                            var options = {
                                chart: {
                                    title: '',
                                    subtitle: '',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
                    <div id="columnchart_material" style="width:auto; height: 500px;"></div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

<?php include "include/footer.php"?>