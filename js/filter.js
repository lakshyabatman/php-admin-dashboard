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
       console.log(flag)
     }
   }
   if(values[1].value!='none')
   {
     
     date1=  moment(entry.order_date,"YYYY-DD-MM")
     date2=  moment(values[1].value,"YYYY-DD-MM")
     
     
     if(moment(entry.order_date).isAfter(values[0].value)==true)
     {
       flag=0
       console.log(flag)
     }
   }
   
   if(values[2].value!='none')
   {
     
     console.log(entry.course_name)
     if(entry.course_name!=values[2].value)
     {
       flag=0
       console.log(flag)
     }
   }
   if(values[3].value=="on")
   {
     
     
     if(entry.due<=0)
     {
       flag=0
       console.log(flag)
     }
   }
   if(values[4].value!="none")
   {

     
     name1=entry.student_name.toLowerCase()
     name2=values[4].value.toLowerCase()
     if(name1!=name2)
     {
       flag=0
       
     }
   }
   
   return flag          
   }
   var filterEntries=[]
   filterEntries=entries.filter((entry)=>{
     return filterEn(entry)
   })
    
  console.log(filterEntries)
  e.preventDefault();
  addEntries(filterEntries)
})
