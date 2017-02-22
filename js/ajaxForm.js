$(document).ready(function(){
  $(".moliereForm").submit(function(e){
    var url = "actions/moliereFormAction.php";
    $.ajax({
      type:"POST",
      url:url,
      data:$(".moliereForm").serialize(),
      success: function(data){
        if(data)
          alert(data);
        else
          $(".moliereForm")[0].reset();
      }
    });
    e.preventDefault();
  });
});

