<?php
            require('.././config/config.php');
            setcookie('active','yes',time()+(2000*30),"/");
            $sql="UPDATE stud SET `fee`=".$_POST['course_fee'].
            ", `demo_taken`='".$_POST['demo_taken'].
            "',  `discount`=".$_POST['discount'].
            ", `fee_depoisted`=".$_POST['fee_depoisted'].
            ", `comment`='".$_POST['remarks'].
            "' WHERE `id`=".$_POST['order_id'];
            mysqli_query($conn, $sql);
?>
