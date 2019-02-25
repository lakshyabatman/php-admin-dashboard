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
            );</script>";
      }

      echo "<script>console.log(entries);</script>";
      echo' <script>
      var tb=document.getElementById("tb");
      output=""
      entries.forEach(entry => {
        output+=`
        
        <form class="form-inline" method="POST" action="./util/success.php">
        <div class="row mb-2">
          <input class="col-sm-1" type="text" readonly name="order_id" value="${entry.order_id}">
          <input  class="col-sm-1" type="text" readonly  value="${entry.order_date}">
          <input  class="col-sm-1" type="text" readonly  value="${entry.email}">
          <input   class="col-sm-1" type="text" readonly  value="${entry.phone_number}">
          <input  class="col-sm-1" type="text" readonly  value="${entry.college_name}">
          <input class="col-sm-1" type="text" readonly  value="${entry.student_name}">
          <input class="col-sm-1" type="number" name="course_fee"  value="${entry.course_fee}">
          <input class="col-sm-1" type="number" name="discount"  value="${entry.discount}">
          <input class="col-sm-1" type="number" name="fee_depoisted"  value="${entry.fee_depoisted}">
          <input class="col-sm-1" type="number" readonly  value="${entry.due}">
          <input class="col-sm-1" type="text" name="remarks"  value="${entry.remarks}">
          <input type="submit"  name="update" class="btn btn-primary " value="update">

        </div>
        
      </form>
        
        `
      });

      tb.innerHTML=output;
    </script>';
  } else {
      echo "0 results";
  }


?>