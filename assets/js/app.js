let submit_btn=document.getElementById("submit-btn")


submit_btn.addEventListener("click",function(){
    let email=document.getElementById("email").value
    let password=document.getElementById("password").value
    console.log(password);
    let data={email:email,password:password}
    $.ajax({
        url:"http://localhost/ci/pages/login",
        method:"POST",
        data:data,
        success:function(res){alert(res)},
        error:function(err){console.log(err)},
      })
})