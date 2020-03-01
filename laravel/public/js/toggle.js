$(document).ready(function(){
    $('#valide').click(function(e){
         e.preventDefault(); 
      $.ajax({
        url: '/order',
        type: "post",
        data: {'titre':$('#titre').val(), 'prixtotal': $('#prixtotal').val(), 'qty': $('#prixtotal').val()},
        dataType: 'JSON',
        success: function (data) {
          console.log(data); 
        }
      });
    });
  });