<?php include "include/DB.php";?>















<div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                    </form>
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php

                                $query="SELECT * FROM categories LIMIT 4 ";
                                $sidebarresult=  mysqli_query($conn, $query);
                                while ($row= mysqli_fetch_assoc($sidebarresult))
                                {
                                    $id=$row['id'];
                                    $catagory=$row['cat_title'];
                                    echo "<li><a href='#'> $catagory</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->








                    </div>
                    <!-- /.row -->
                </div>

<?php include "widget.php"?>