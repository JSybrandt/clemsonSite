$(document).ready(function(){
  $(".moliereForm").submit(function(e){
    var url = "actions/moliereFormAction.php";
    $.ajax({
      type:"POST",
      url:url,
      data:$(".moliereForm").serialize(),
      success: function(data){
        if(data){
          $(".resultText").html(data);
          $(".resultText").removeClass("success")
          $(".resultText").addClass("err")
        }
        else{
          $(".resultText").html("Data Submitted Successfully");
          $(".resultText").removeClass("err")
          $(".resultText").addClass("success")
          $(".moliereForm")[0].reset();
        }
      }
    });
    e.preventDefault();
  });
});

