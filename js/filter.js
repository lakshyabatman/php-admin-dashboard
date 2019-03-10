var queryForm= document.getElementById('queryForm')
queryForm.addEventListener('submit',(e)=>{
  
  
   var values=[]

   let targets=Array.from(e.target)
   
   
   targets.forEach((target)=>{
     if(target.value){
       values.push({
         'name':target.name,
         'value':target.value
         })


     }
     else{ 
       values.push({
         'name':target.name,
         'value':'none'
       })
     }
    })
    

   //Filter
   function filterEn(entry){
   
   var flag=1
   if(values[0].value!='none')
   {
     
     date1=  moment(entry.order_date,"YYYY-DD-MM")
     date2=  moment(values[0].value,"YYYY-DD-MM")
     if(moment(entry.order_date).isBefore(values[0].value)==true)
     {
       flag=0
     }
   }
   if(values[1].value!='none')
   {
     
     date1=  moment(entry.order_date,"YYYY-DD-MM")
     date2=  moment(values[1].value,"YYYY-DD-MM")
     
     
     if(moment(entry.order_date).isAfter(values[1].value)==true)
     {
       flag=0
     }
   }
   
   if(values[2].value!='none')
   {
     
     if(entry.course_name!=values[2].value)
     {
       flag=0
     }
   }
   if(values[3].value=="no")
   {
      if(entry.due>0)
      {
        flag=0
      }
   }
   if(values[3].value=="yes")
   {
     
     if(entry.due<=0)
     {
       flag=0
     }
   }
   if(values[4].value!="none"){
     name1=entry.demo_taken.toLowerCase()
     name2=values[4].value.toLowerCase()
     if(name2=="yes"){
      if(name1=="no"){
        flag=0
      }
     }if(name2=="no"){
      if(name1=="yes"){
        flag=0
      }
     }
   }
   if(values[5].value!="none"){
    if(entry.batch!=values[5].value){
      flag=0
    }
   }
   if(values[6].value!="none")
   {

     
     name1=entry.student_name.toLowerCase()
     name2=values[6].value.toLowerCase()
     if(name1!=name2)
     {
       flag=0
       
     }
   }
   
   return flag          
   }
   let filterEntries
   
   filterEntries=entries.filter((entry)=>{
     return filterEn(entry)
   })
  console.log(entries)
  addEntries(filterEntries)
  console.log(filterEntries)
  e.preventDefault();
})
