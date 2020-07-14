$(document).ready(function(){
  $('.tab > a').on('click', function (e) {
    e.preventDefault();
    if($(this).text() === 'Registrarse'){
      $(this).parent().addClass('active');
      $(this).parent().parent().children().first().removeClass('active');
      $('.form-login').hide();
      $('.form-create').show();
    }else{
      $(this).parent().addClass('active');
      $(this).parent().parent().children().last().removeClass('active');
      $('.form-login').show();
      $('.form-create').hide();
    }
  });
});
