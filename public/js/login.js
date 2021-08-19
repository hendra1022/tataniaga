$(document).ready(function(){
    $("#logbut").click(function(){
        var email = $("#email").val();
        var pass = $("#password").val();
        // alert(email);
        // alert(pass);
        
        // var status = "";
        // $.ajax({
        //     type:"POST",
        //     url:"login_ajax.php",
        //     data: "<data><email>"+email+"</email><pass>"+pass+"</pass><email_err>"+email_err+"</email_err><pass_err>"+pass_err+"</pass_err></data>",
        //     success: function(suc){
        //         console.log(suc);
        //         $(suc).find("errorlist").each(function(){
        //             email_err = $(this).find('email_err').text();
        //             password_err = $(this).find('pass_err').text();
        //             status = $(this).find('status').text();
        //         });

        //         if(username_err == "" && password_err == ""){
        //             if (status == "1") {
        //                 window.location.href = "index.html";
        //             }else{
        //                 window.location.href = "upload.php";
        //             }
        //             sessionStorage.setItem("usernamelogin", username);
        //             sessionStorage.setItem("userstatus", status);
        //         }
        //         else{
        //             $("#email_err").text(email_err);
        //             $("#password_err").text(password_err);
        //         }
        //     }

        // });
    });
});