<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["update"])){
            $sql="UPDATE student_data SET `course_fee`=".$_POST['course_fee'].
            ",  `discount`=".$_POST['discount'].
            ", `fee_depoisted`=".$_POST['fee_depoisted'].
            ", `remarks`='".$_POST['remarks'].
            "' WHERE `order_id`=".$_POST['order_id'];
            echo $sql;
            require('.././config/config.php');
            if (mysqli_query($conn, $sql)) {

                echo "<script>location.href='../index.php'</script>";
            } else {
            echo "<center>Error updating record: " . mysqli_error($conn)."</center>";
            }
        }
        mysqli.close($conn);   


    ?>
</body>
</html>