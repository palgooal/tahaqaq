
function FunctionPast(){


    if(document.getElementById('img'))
        document.getElementById('img').value =  localStorage.getItem("copyPath");
    document.getElementById('viewImg').innerHTML = `<div class="card cardImageTeam" style="" id="">
                                                   <div class="card-body">
                                                     <img src="/images/${localStorage.getItem("copyPath")}" alt="">
                                                     
                                                   </div>
                                                 </div>`
   }



function FunctionCopy(text) {
  var copyText = document.getElementById(text);
  console.log(copyText + " copytet");
 
  copyText.select();
  var success = document.execCommand("Copy");
  if(success){
    document.getElementById("alertCopty").style.display = "block"
    setTimeout(function(){
      document.getElementById("alertCopty").style.display = "none"
      }, 2000);
      
  }
  console.log(text);
  
  localStorage.setItem("copyPath", text);
console.log(success);
}


