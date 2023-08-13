function addStu(){
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var password = $("#password").val();

    $.ajax({
        url:"student/addstud.php",
        method:"POST",
        data:{
            
        }
    })
   

}