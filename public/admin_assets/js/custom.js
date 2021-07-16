

jQuery('#frmRegistration').submit(function(e){
  e.preventDefault();
  jQuery('.field_error').html('');
  jQuery.ajax({
    url:'registration_process',
    data:jQuery('#frmRegistration').serialize(),
    type:'post',
    success:function(result){
      if(result.status=="error"){
        jQuery.each(result.error,function(key,val){
          jQuery('#'+key+'_error').html(val[0]);
        });
      }
      
      if(result.status=="success"){
        jQuery('#frmRegistration')[0].reset();
        jQuery('#thank_you_msg').html(result.msg);
      }
    }
  });
});