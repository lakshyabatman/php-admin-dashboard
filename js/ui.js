

function addEntries(entries){
    var tb=document.getElementById("tb");
      output=""
      if(entries.length>0){
        entries.forEach(entry => {
            output+=`
            
            <form class="form-inline" method="POST" action="./util/success.php">
            <div class="row mb-2">
              <input class="col-sm-1" type="text" readonly name="order_id" value="${entry.order_id}">
              <input  class="col-sm-1" type="text" readonly  value="${entry.order_date}">
              <input  class="col-sm-1" type="text" readonly  value="${entry.course_name}">
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
          })
      }
      else{
          output='0 result'
      }
      
tb.innerHTML=output;
}