<?php include "connect.php" ?>
<html>
<head><meta charset="UTF-8"></head>
<body>
<form action="insert-member.php" method="post">
    username: <input type="text" name="username"><br><br>
    password: <input type="text" name="password"><br><br>
    name: <input type="text" name="name" size="24"><br><br>
    address: <br><textarea name="address" row="3" cols="32"></textarea><br><br>
    mobile: <input type="text" name="mobile" size="22"><br><br>
    email: <input type="email" name="email" size="23"><br><br>
    <input type="submit" value="Add">
</form>
</body>
</html>