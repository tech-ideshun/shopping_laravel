$(function(){
  $("[name='image']").on('change', function (e) {
    
    var reader = new FileReader();
    
    reader.onload = function (e) {
        $("#preview").attr('src', e.target.result);
    }
    $('#default').hide();
    reader.readAsDataURL(e.target.files[0]);   

  });
});


$(function() {
  'use strict';

  $(function() {
    $('.flash_message').fadeOut(3000);
  });
});

