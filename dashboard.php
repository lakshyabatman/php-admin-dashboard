
<?php

  if($_POST["user_name"] && $_POST["password"] && $_POST['login']){
    $trimmed= htmlspecialchars(trim($_POST["user_name"]));
    $hashedPass= password_hash($_POST["password"], PASSWORD_DEFAULT);
    require('./config/config.php');
    
    $sql="SELECT * FROM admin WHERE user='".$trimmed."'";
      $result= mysqli_query($conn,$sql);
      if($result){
         
          if(mysqli_num_rows($result)>0){
     
            $row = mysqli_fetch_assoc($result);
           
            if(!(password_verify($row['password'],$hashedPass))){
              die("Invalid Password");
            }
              
          }else{
            die("Email Doesn't Exist!");
          }
      }else{
        die("Invalid Creditonals");
      }
  }else{  

      if($_COOKIE['active']!="yes")
      {
        die("<center>You need to login to acces this route</center>");

      }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="" widdiv="30" height="30" class="d-inline-block align-top" alt="">
          IT BODHI ADMIN
        </a>
      </nav>
      <div class=" mt-5 ">
          <div class="bg-light p-2 px-5">
            <form class="form-group my-1 row" id="queryForm" >
               <div class="col-sm-2">
                <input type="date" name="date_from" placeholder="From" id=""> 
                <label >-</label>
                <input type="date" name="date_to" placeholder="To" id=""> 
                </div>
                <div class="col-sm-2">
                <input type="text" name="course_name" placeholder="Course Name">
                </div>
        
               <div class="col-sm-1">
               <label >Due </label>
                  <select name="due" id="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="none">None</option>
                  </select>
               </div>
               <div class="col-sm-2">
               <label >Demo Taken</label>
                  <select name="demo" id="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="none">None</option>
                  </select>
               </div>
               <div class="col-sm-5">
                <input type="number" placeholder="Batch Number" name="batch">
                <input type="text" placeholder="Student Name" class="w-50 " name="student_name" >
                <input type="Submit" name="query" value="Search" class="btn btn-success">
               </div>
            </form>
          </div>
          <div class=" mt-5 bg-light">        
                        <div class="my-2 mx-2">
                          <div >
                            <div class="myInput1" >Order_id</div>
                            <div  class="myInput1">Order Date</div>
                            <div  class="myInput1">Course Name</div>
                            <div  class="myInput1">Email</div>
                            <div  class="myInput1">Phone Number</div>
                            <div  class="myInput1">Student Name</div>
                            <div  class="myInput1">Course Fee</div>
                            <div  class="myInput1">Discount in %</div>
                            <div  class="myInput1">Fee Deposited</div>
                            <div  class="myInput1">Due</div>
                            <div  class="myInput1">Demo Taken</div>
                            <div  class="myInput1">Batch</div>
                            <div  class="myInput1">Remarks</div>
                            <div  class="myInput1"><input type="checkbox" id="select-all"> Select All <button class="btn btn-danger sendEmail" >Send Email</button></div>
                          </div>
                        </div>
                         <div class="row mx-2" id="tb">
                        </div>
          </div>
      </div>
      <script src="vendor/jquery.min.js"></script>
      <script src="vendor/moment.min.js"></script>
      <script src="js/ui.js"></script>
      <script src="js/filter.js"></script>
      <script>
     
      $(document).ready(function(){
            $('#select-all').click(function(event) {   
            if(this.checked) {
                $(':checkbox').each(function() {
                    this.checked = true;                        
                });
            } else {
                $(':checkbox').each(function() {
                    this.checked = false;                       
                    });
                }
            });




           $('.updateMe').submit(function(){
              
                order_id=$(this)[0][0].value;
                entries.forEach((entry)=>{
                  if(entry.order_id==order_id){
                    entry.discount=$(this)[0][7].value;
                    entry.course_fee=$(this)[0][6].value;
                    entry.remarks=$(this)[0][13].value;
                    entry.demo_taken=$(this)[0][10].value;
                    entry.fee_depoisted=$(this)[0][8].value
                    entry.due=(entry.course_fee-(entry.course_fee*(entry.discount/100)))-entry.fee_depoisted 

                  }
                })
              
              $.ajax({
                  type: 'POST',
                  url: './util/success.php', 
                  data: $(this).serialize()
              })
              .done(function(data){           
                alert("Data updated")
              })
              .fail(function(err) {
                  alert( "Posting failed." );         
              });
                return false;
      
          });
      });

      </script>
      <?php
        require('./config/config.php');
        $sql = "SELECT * FROM stud WHERE business_line='Professional'";
        require('./util/fetch.php');
      ?>
</body>
</html>



