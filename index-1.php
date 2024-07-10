<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38-Thanchanok</title>
</head>
<body>
    <form method="GET">
        ทีมฟุตบอล 1<input type="text" name="get1"></br>
        ทีมฟุตบอล 2<input type="text" name="get2"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
    $get1 = $_GET['get1'];
    $get2 = $_GET['get2'];
    if ($get1>$get2) {
        echo "ทีมฟุตบอล 1 ชนะ";
    }
    if ($get2>$get1) {
        echo "ทีมฟุตบอล 2 ชนะ";
    }
    if ($get1==$get2) {
        echo "ทีมฟุตบอลเสมอทั้งคู่!!";
    }
    ?>
</body>
</html>
