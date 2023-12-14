const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit=(e)=>{
    e.preventDefault();
}

continueBtn.onclick =()=>{
    // console.log("hello ktti");
   let xhr = new XMLHttpRequest();//create xml object
   xhr.open("POST","php/signup.php",true);
   xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data=="success"){
                 console.log(data);
            }
            else{
                console.log(data);
            }
            //console.log(data);
        }
    }
  }
  let formData = new FormData(form);
    xhr.send(formData);
}