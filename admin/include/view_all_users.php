
  <table class=" table table-bordered table-hover">
                                <thead>
                                <tr>

                                    <th>رقم المستخدم</th>
                                    <th>اسم المستخدم</th>
                                    <th>الاسم الاول</th>
                                    <th>اسم العائلة</th>
                                    <th>البريد</th>
                                    <th>نوع المستخدم</th>
                                    <th colspan="4">المعالجة</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $query="SELECT * From users";
                                $postresult=mysqli_query($conn,$query);
                                if(!$postresult)
                                {
                                    echo "Error in the query".mysqli_error($conn);
                                }
                                while($row=mysqli_fetch_assoc($postresult)) {
                                    $userid=$row['user_id'];
                                    $username=$row['username'];
                                    $firstname=$row['user_firstname'];
                                    $lastname=$row['user_lastname'];
                                    $email=$row['user_email'];
                                    $userimage=$row['user_image'];
                                    $role=$row['user_role'];
                                    echo "<tr>";
                                    echo "<td> $userid</td>";
                                    echo "<td> $username</td>";
                                    echo "<td> $firstname</td>";
                                    echo "<td>  $lastname</td>";
                                    echo "<td>  $email</td>";
                                    echo "<td>  $role</td>";
                                    echo "<td><a href='users.php?delete={$userid}'>حذف</a></td>";
                                    echo "<td><a href='users.php?source=edit_user&edit_user={$userid}'>تعديل</a></td>";
                                    echo "<td><a href='users.php?change_to_admin={$userid}'>admin</a></td>";
                                    echo "<td><a href='users.php?change_to_employee={$userid}'>employee</a></td>";
                                    echo "</tr>";
                                }
                                if(isset($_GET['delete'])) {
                                    $user_id=$_GET['delete'];
                                    $query="DELETE FROM users where user_id='$user_id'";
                                    $result=mysqli_query($conn,$query);
                                    header("Location:users.php");
                                }
                                if(isset($_GET['change_to_admin'])) {
                                    $user_id=$_GET['change_to_admin'];
                                    $query="UPDATE users SET user_role= 'admin' where user_id='$user_id' ";
                                    $result=mysqli_query($conn,$query);
                                    header("Location:users.php");
                                }
                                if(isset($_GET['change_to_employee'])) {
                                    $user_id=$_GET['change_to_employee'];
                                    $query="UPDATE users SET user_role= 'employee' where user_id='$user_id' ";
                                    $result=mysqli_query($conn,$query);
                                    header("Location:users.php");
                                }

                                ?>

                                </tbody>
                            </table>
