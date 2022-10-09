<?php include "connect.php" ?>
<?php //Workshop9
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<html>
<head><meat charset="utf-8"></head>
<body>
<form action="edit-member.php" method="post">
    <input type="hidden" name="username" value="<?=$row["username"]?>">
    name: <input type="text" name="name" value="<?=$row["name"]?>"><br><br>
    address: <textarea name="address" rows="3" cols="42"><?=$row["address"]?></textarea><br><br>
    mobile: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br><br>
    email: <input type="email" name="email" value="<?=$row["email"]?>"><br><br>
    <input type="submit" value="Edit">
</form>
</body>
</html>