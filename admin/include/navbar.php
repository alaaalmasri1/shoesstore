<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
        <li> <a href="../index.php">المستخدمين النشطين<?php 
        global $user_count;
        echo  $user_count?></a></li>
    <li> <a href="../index.php">الصفحة الرئسية</a></li>
    <li class="dropdown">
        <ul class="dropdown-menu message-dropdown">
            <li class="message-preview">
                <a href="#">
                    <div class="media">

                </a>
            </li>
        </ul>
            </li>

    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
            
            <?php
            
            if(isset($_SESSION['username']))
            {
                echo $_SESSION['username'];
            }
 else {
     echo "there is an error";
 }
            
            ?>
            <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="../profile.php"><i class="fa fa-fw fa-user"></i> الملف الشخصى</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> البريد</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> الاعدادات</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="include/logout.php"><i class="fa fa-fw fa-power-off"></i> الخروج</a>
            </li>
        </ul>
    </li>
</ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> لوحة التحكم</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> المزيد <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="post_dropdown" class="collapse">
                <li>
                    <a href="./posts.php">جميع الاعلانات</a>
                    <a href="posts.php?source=ADD_POST">اضافة اعلان</a>
                    <a href="catagory.php">اضافة فيئة</a>
                </li>

            </ul>





        </li>


        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> المستخدمين<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">

<li>
    <a href="users.php">قائمة المستخدمين</a>
</li>
                <li>
                   <a href="users.php?source=add-user">اضافة مستخدم</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> الملف الشخصى</a>
        </li>

    </ul>S
</div>
<!-- /.navbar-collapse -->
</nav>