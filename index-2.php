<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38-Thanchanok</title>
</head>
<body>
    <form method="GET">
        เดือน <input type="text" name="submth"></br>
        <input type="submit" value="ตกลง">
    </form>
    <?php
        $submth = $_GET['submth'];
        switch ($submth) {
            case ("มกราคม"):case ("มีนาคม"):case ("พฤษภาคม"):case ("กรกฎาคม"):case ("สิงหาคม"):case ("ตุลาคม"):case ("ธันวาคม"):
                echo "เดือน $submth - มี 31 วัน";
                break;
            case ("เมษายน"):case ("มิถุนายน"):case ("กันยายน"):case ("พฤศจิกายน"):
                echo "เดือน $submth - มี 30 วัน";
                break;
            default:
                echo "ไม่พบเดือนที่ใส่!!!";
        }
    ?>
</body>
</html>
