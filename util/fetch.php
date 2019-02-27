<?php
  $result = mysqli_query($conn, $sql);
        
  if (mysqli_num_rows($result) > 0) {
      echo "<script> 
      var entries=[];";
      while($row = mysqli_fetch_assoc($result)) {
          echo " entries.push(
            {".
            "order_id:'".$row['order_id']."'".
            ",order_date:'".$row['order_date']."'".
            ",course_name:'".$row['course_name']."'".
            ",email:'".$row['email']."'".
            ",phone_number:".$row['phone_number'].
            ",college_name:'".$row['college_name']."'".
            ",student_name:'".$row['student_name']."'".
            ",course_fee:".$row['course_fee'].
            ",discount:".$row['discount'].
            ",discount:".$row['discount'].
            ",fee_depoisted:".$row['fee_depoisted'].
            ",due:".(($row['course_fee']-$row['course_fee']*($row['discount']/100))-$row['fee_depoisted']).
            ",remarks:'".$row['remarks']."'".
            "}
            );";
          }
      echo "</script>";    
      echo' <script>addEntries(entries)</script>';
  } else {
      echo "0 results";
  }


?>