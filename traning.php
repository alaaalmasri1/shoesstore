
<?php
include"include/DB.php"
?>

<html>
<body>
<form action="admin/include/login_user.php" method="post">
    <font size="6">Username:</font>
    <input type="text" style="font-size:30px;height:45px;width:300px;" name="username" id="username"/>
    <br>
    <font size="6">Password:</font>
    <input type="password" style="font-size:30px;height:45px;width:300px;" name="password" id="password"/>
    <br>
    <input type="submit" style="font-size:30px;height:45px;width:300px;" name="login" id="submit" value="Login"/>
</form>
</body>
</html>
