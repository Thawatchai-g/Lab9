<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while($row = $stmt->fetch()):
?>
username: <?=$row["username"]?><br> 
password: <?=$row["password"]?><br> 
name: <?=$row["name"]?><br> 
address: <?=$row["address"]?><br> 
mobile: <?=$row["mobile"]?><br> 
email: <?=$row["email"]?><br>
<a href='editform.php?username=<?=$row["username"]?>'>แก้ไข</a> |
<a href='delete-member.php?username=<?=$row["username"]?>'>ลบ</a><hr>
<?php endwhile; ?>
</body>
</html>