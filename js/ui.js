
function addEntries(x){
    var tb=document.getElementById("tb");
      output=""
      if(x.length>0){
        x.forEach(entry => {
            output+=`            
            <form class="form-inline updateMe" style="width:100%" >
            <div class=" mb-3" style="width:100%">
              <input  type="text" class="myInput form-control-sm" readonly name="order_id" value="${entry.order_id}">
              <input  class="myInput form-control-sm" type="text" readonly  value="${entry.order_date}">
              <input  class="myInput form-control-sm" type="text" readonly  value="${entry.course_name}">
              <input  class="myInput form-control-sm" type="text" readonly  value="${entry.email}">
              <input   class="myInput form-control-sm" type="text" readonly  value="${entry.phone_number}">
              <input class="myInput form-control-sm" type="text" readonly  value="${entry.student_name}">
              <input class="myInput form-control-sm" type="number" name="course_fee"  value="${entry.course_fee}">
              <input class="myInput form-control-sm" type="number" name="discount"  value="${entry.discount}">
              <input class="myInput form-control-sm" type="number" name="fee_depoisted"  value="${entry.fee_depoisted}">
              <input class="myInput form-control-sm " type="text" readonly  value="${entry.due}">
              <input class="myInput form-control-sm " name="demo_taken" type="text" value="${entry.demo_taken}">
              <input class="myInput form-control-sm " name="batch" readonly type="text" value="${entry.batch}">
              <input class="myInput form-control-sm" type="text" name="remarks"  value="${entry.remarks}">
              <input type="checkbox" name="email"  class="mailChk col-sm-1">
              <button class="sendEmail" >Send Email</button>
              <input  type="submit"  name="update" class=" " value="update">
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