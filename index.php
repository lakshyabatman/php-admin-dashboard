

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="" widdiv="30" height="30" class="d-inline-block align-top" alt="">
          IT BODHI ADMIN
        </a>
      </nav>
      <div class=" mt-5 ">
          <div class="bg-light p-2  container">
            <form class="form-group my-1 row" medivod="POST" action="" >
               <div class="col-sm-5">
                <input type="date" name="date_from" placeholder="From" id=""> 
                <label >-</label>
                <input type="date" name="date_to" placeholder="To" id=""> 
                <select>
                    <option value="" disabled>Courses</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select> 
               </div>
               <div class="col-sm-2">
               <label >Due </label>
                  <input type="checkbox" name="due">
               </div>
               <div class="col-sm-4">
                <input type="text" placeholder="Name" class="w-50 " name="student_name" >
                <input type="Submit" name="query" class="btn btn-success">
               </div>
            </form>
          </div>
          <div class=" mx-2 mt-5 bg-light">
                
                      
                        <div>
                          <div class="row">
                            <div class="col-sm-1">Order_id</div>
                            <div class="col-sm-1">Date</div>
                            <div class="col-sm-1">Email</div>
                            <div class="col-sm-1">Phone Number</div>
                            <div class="col-sm-1">College Name</div>
                            <div class="col-sm-1">Student Name</div>
                            <div class="col-sm-1">Course Fee</div>
                            <div class="col-sm-1">Discount in %</div>
                            <div class="col-sm-1">Fee Deposited</div>
                            <div class="col-sm-1">Due</div>
                            <div class="col-sm-1">Remarks</div>
                            <div class="col-sm-1">Update</div>
                          </div>
                        </div>
                        <div class="row" id="tb">
                        </div>
                      </table>
          </div>
      </div>
      <?php
        require('./config/config.php');
        $sql = "SELECT * FROM student_data";
        //QUERY
        if(isset($_POST['query']) ){
          $sql=$sql." WHERE ";
          if(isset($_POST['date_from'],$_POST['date_to']) && $_POST['date_from']>0 && $_POST['date_to']>0){
           $sql= $sql."AND order_date<=".$_POST['date_to']." && order_date>=".$_POST['date_from'];
          }

          if(isset($_POST['due'])){

            $sql=$sql."(course_fee*(1+discount/100))-fee_depoisted>0";
          }

          if(isset($_POST['name'])){
            $sql=$sql."AND student_name=".$_POST['student_name'];
            echo $sql;
          }
        }
        require('./util/fetch.php');
        
   
      ?>

    
</body>
</html>



