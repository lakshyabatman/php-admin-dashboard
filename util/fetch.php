<?php
  $result = mysqli_query($conn, $sql);
  echo "<script> let entries=[]</script>";
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          echo "<script> entries.push({".
            "order_id:'".$row['id']."'".
            ",order_date:'".$row['date']."'".
            ",course_name:'".$row['course']."'".
            ",email:'".$row['email']."'".
            ",phone_number:".$row['mobno'].
            ",student_name:'".$row['name']."'".
            ",course_fee:".$row['fee'].
            ",discount:".$row['discount'].
            ",fee_depoisted:".$row['fee_depoisted'].
            ",due:".(($row['fee']-$row['fee']*($row['discount']/100))-$row['fee_depoisted']).
            ",remarks:'".$row['comment']."'".
            ",demo_taken:'".$row['demo_taken']."'".
            ",batch:'".$row['batch']."'".

            "}
            )</script>";
          }
      echo " <script>addEntries(entries)</script>";
  } else {
      echo "0 results";
  }


?>