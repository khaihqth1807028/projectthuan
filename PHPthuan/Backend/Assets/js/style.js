$(document).ready(function () {
  $("#loginform").validate({
      rules:{
          username:"required",
          password:"required"
      },
      message:{
          username:{
              required :"Nhập user",
          }
      }


  })
      $("#username").focus(function () {
          var username = $("#username").val();
          
      })
})