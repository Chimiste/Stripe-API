	
/*
 * @package:SMS
 * @helper::ajaxSubmit()
 * @params:url
 * @params:data
 * @params:successCallBack
 * @params:errorCallBack
 * @params:failureCallBack
*/
function ajaxSubmit(url, data , successCallBack, errorCallBack, failureCallBack, datatype, ref,panel){

   var lastRequest;
  // trigger(".load_progress_bar", "click");
   
   lastRequest =  $.ajax({
		  type: "POST",
		  url: url,
		  data : data,
		  dataType : datatype,
		  contentType: "application/x-www-form-urlencoded",
		  success: function(result){
		   
		   if(datatype == 'json'){ 
		   
			  if(result.status == 1)
				 successCallBack(ref, result.msg);
			  
			  if(result.status == 0) 
				 errorCallBack(ref, result.msg); 
		   }
		   else {
			   successCallBack(ref,result);
			 
		   }
		  },
		  error: function(xhr, status, error){
			  var errorHandling = ajaxRequestErrors(xhr.status);
			  failureCallBack(ref, errorHandling);
			  
			 //alert(xhr.status)
		  },
		  complete:function(){
               destroyProgressBar();
			   hide('.ajaxLoader');
			   
			   if(panel){
				   destroyProcessingPanel(panel)   
			   }
			   
			   if(ref=="post_status"){
				  hide('#text_status, #dropzone_panel_status'); 
				  $('.note-editable').html('');
				  $('#text_image').val('');
				  $('#subject_title').val('');
				  trigger('.dz-remove', "click");
			   }
		   $.getScript(getjsdir+"jquery.media.js",function(){   
				$('.media').media({
						autoplay: false,
						width:     330, 
						height:    250, 
						
				});
			});
			   
			$.getScript(getjsdir+"confirm-bootstrap.js",function(){
			 	
					$('.deleteV2').confirmModal({
						confirmTitle: 'Please confirm',
						confirmMessage: 'Are you sure you want to delete this?',
						confirmStyle: 'danger',
						confirmOk: '<i class="icon-trash icon-white"></i> Delete',
						confirmCallback: function (target) {
							   
							var id = target.attr('data-id'),
								tblprefix = target.attr('data-tableprefix'),
								table = target.attr('data-table'),
								trid = target.attr('data-trid');
								ref = target.attr('data-ref');
								
							if(id) id = id;
							else id = '';
							 
							var data = "id="+id+'&trid='+trid+'&table='+table+'&tblprefix='+tblprefix+"&ref="+ref;
							url = baseurl+'delete-row';
					
						   ajaxSubmit(url, data , successCallBack, errorCallBack, failureCallBack, 'json','delete'); 
						}
					});  
			});
			   
		  }
	});		   	
}
/**
 * @package:SMS
 * @helper::fadeIn()
 * @params:id
 * @params:time
*/
function fadeIn(id, time){
	$(id).fadeIn(time);	
}
/**
 * @package:SMS
 * @helper::fadeOut()
 * @params:id
 * @params:time
*/
function fadeOut(id, time){
	$(id).fadeOut(time);	
}
/**
 * @package:SMS
 * @helper::html()
 * @params:id
 * @params:time
*/
function html(id, str){
	$(id).html(str);	
}
/**
 * @package:SMS
 * @helper::html()
 * @params:id
 * @params:time
*/
function append(id, str){
	$(id).append(str);	
}
/**
 * @package:SMS
 * @helper::show()
 * @params:id
*/
function show(id){
	$(id).show();	
}
/**
 * @package:SMS
 * @helper::hide()
 * @params:id
*/
function hide(id){
	$(id).hide();	
}
/**
 * @package:SMS
 * @scripts::ajaxRequestErrors()
 * @params:status
 */
function ajaxRequestErrors(status){
	
	switch(status){
		
		case 0: 
		  return 'Not connected, verify your internet connection[0].'; 
		break;
		case 404: 
		   return 'The page your looking for is not found[404].';
	    break;	
		case 500: 
		    return 'Internal server error[500]';
	    break;	
	}
}
/**
 * @package:SMS
 * @scripts::setTimeOutToRedirect()
 * @params:time
 * @params:url
 */
function setTimeOutToRedirect(time, url){

   setTimeout(function(){
	 window.location = url;
   },time); 
}
/**
 * @package:SMS
 * @scripts::setTimeOutToClose()
 * @params:time
 * @params:id
 */
function setTimeOutToClose(time, id){

   setTimeout(function(){
	 fadeOut(id,'slow'); 
   },time); 
}
/**
 * @package:SMS
 * @scripts::setTimeOutToOpen()
 * @params:time
 * @params:id
 */
function setTimeOutToOpen(time, id){

   setTimeout(function(){
	 fadeIn(id,'slow'); 
   },time); 
}
/**
 * @package:SMS
 * @scripts::resetForm()
 * @params:selector
 */
function resetForm(selector){
   $(selector)[0].reset();	
}
/**
 * @package:SMS
 * @scripts::trigger()
 * @params:selector,event_
 */
function trigger(selector, event_){
   $(selector).trigger(event_);	
}
/**
 * @package:SMS
 * @scripts::upload()
 * @params:e
 */
function upload(e, selector){

  var target = $.event.fix(e).target;
  $(target).closest("form").submit(); 
  
}
/**
 * @package:SMS
 * @scripts::Startupload()
 * @params:phone
 */
function Startupload(selector)
{
  html(selector,'<img src="'+baseurl+asset_dir+'img/ajax-loader-4.gif" alt="" />');
}
/**
 * @package:SMS
 * @scripts::isPhoneValid()
 * @params:phone
 */
function isPhoneValid(phone){
	
	var phoneRegExp = /^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?[0-9]{1,12}){1,2}$/;
	var numbers = phone.split("").length;
	
	if (10 <= numbers && numbers <= 20 && phoneRegExp.test(phone))
	  return true;
	else 
	  return false;
}
/**
 * @scripts::scrollTop()
 * @params:id
 */
function scrollTop(id){
   $('html,body').animate({scrollTop:$(id).position().top}, 'slow');
}

$(".print").click(function(){
    $("div.box-content-marksheet").printArea( {mode:"popup", popHt: 800,popWd: 800 ,popX: 500 ,popY: 600,popTitle:"marksheet",popClose:true,strict:true } );
});

function getChosen(){
    return $('[data-rel="chosen"],[rel="chosen"]').chosen();	
}
/**
 * @package:SMS
 * @scripts::showNotfySuccess()
 * @params:str
 */
function showNotfySuccess(str){
	 $(".top-notification").attr("data-noty-options",'{"text":"'+str+'","layout":"top","type":"information"}');
     trigger(".top-notification", 'click'); 
}
/**
 * @package:SMS
 * @scripts::showNotfyError()
 * @params:str
 */
function showNotfyError(str){
	 $(".top-notification").attr("data-noty-options",'{"text":"'+str+'","layout":"top","type":"error"}');
     trigger(".top-notification", 'click'); 
}

function processing(selector, option){
  if(selector == ''){
	hide('#breadcrumb-ajax-load');  
  }
  else {
	if(option=='html'){
      $(selector).html('&nbsp;<img src="'+baseurl+asset_dir+'img/ajax-loader-4.gif" alt=""  class="processing"/>');
	}
	else if(option == 'append'){
		$(selector).append('&nbsp;<img src="'+baseurl+asset_dir+'img/ajax-loader-4.gif" alt=""  class="processing"/>')
	}
  }
}
 /**
 * @package:WebTour
 * @scripts::loadProgressBarFrontEnd()
 * @params:phone
 */
function loadProgressBarFrontEnd(){
	//show('.load_progress_bar');
	$.mpb('show',{value: [0,50],speed: 5, state: 'success'});
	return $.mpb('update',{value: [0,100],speed: 5, state: 'success'});
}
/**
 * @package:WebTour
 * @scripts::destroyProgressBar()
 * @params:phone
 */
function destroyProgressBar(){
  return $.mpb('destroy');	
}
   /**
   * @package:SMS
   * @scripts::showNotfySuccess()
   * @params:str
   */
   function showNotfySuccess(str){
	   $('#noty_topCenter_layout_container').remove();
	 noty({text: str, layout: 'topCenter',"type":"information"})
	 trigger(".top-notification", 'click');  
	 setTimeOutToClose(5000, "#noty_topCenter_layout_container");
   }
  /**
   * @package:SMS
   * @scripts::showNotfyError()
   * @params:str
   */
  function showNotfyError(str){
	  $('#noty_topCenter_layout_container').remove();
	 noty({text: str, layout: 'topCenter',"type":"error"})
	 trigger(".top-notification", 'click');  
	 setTimeOutToClose(5000, "#noty_topCenter_layout_container")
  }
  /**
 * @package:SmartEmail24
 * @scripts::successCallBack()
 * @params:phone
 */
 function successCallBack(ref, str){
      //alert('success');
	 switch(ref){
		   case 'signin':
		      ref = 'signin';
			  //show('#login');
			  
	          setTimeOutToRedirect(1000, baseurl);
			  
			  showNotfySuccess(str);
			 
		   break;
		   case 'signup':
		   //show("#register");
		    // loadProgressBarFrontEnd();
			 setTimeOutToRedirect(1000, baseurl+'signin');
		      showNotfySuccess(str);
		      
		   break;
		   case 'logout':
		      ref = 'logout';
                 setTimeOutToRedirect(1000, baseurl+"auth");
				 showNotfySuccess(str);
				 loadProgressBarFrontEnd();
		   break;
		   
		   case 'renew-pass-process':
		       showNotfySuccess(str);
			   $('#modal_change_password').modal('hide');
		   break;
		   
		   case 'resetpass':
		   showNotfySuccess(str);
		   $('#change_password_email').modal('hide');
		   break;
		   
		   case 'renew-forgot-pass-process':
		   if(isSession == 0) setTimeOutToRedirect(1000, baseurl+'signin');
		   showNotfySuccess(str);
		   $('#forgot_password').modal('hide');
		   break;
		   
		   case 'edit-profile':
		   showNotfySuccess(str);
		   break;
		   case 'add_users':
		   showNotfySuccess(str);
		   break
		   
		   case 'add_friend':
		    hide('.img_load_process');
                    setTimeout(function(){
                    $('#viewUsersModal').modal('hide')
                    }, 5000);
                    //alert();
                   html('#button_add_friend', 'Friend request sent');
                   setTimeout(function(){
                   html('#button_add_friend', 'Add Friend')			 
                   }, 6000);
		   //showNotfySuccess(str);
		   break;
		   
		   case 'reply_friend_request':
		   $('.confirmed_friend').html('Comfirmed');
		   break;
		   
		   case 'add_plan':
		   showNotfySuccess(str);
		   break;
		   
		   case 'update_plan':
		   showNotfySuccess(str);
		   break;
		   
		   case 'create_page':
		   showNotfySuccess(str);
		   break;
		   
		   case 'loadmore_contact':
		     // alert(str)
			$('#display_contact_table > tbody:last').append(str);
		   break;
		   case 'create_blog':
		     showNotfySuccess(str);
			 $(".addblogForm button").attr('disabled', false);
		   break;
		   case 'create_coupon':
		     showNotfySuccess(str);
		   break;
		   case 'update_page':
		     showNotfySuccess(str);
		   break;
		   case 'update_blog':
		     showNotfySuccess(str);
		   break;
		   case 'update_coupon':
		     showNotfySuccess(str);
		   break;
		   case 'delete':
		     var spl = str.split(":_:");
             hide('#'+spl[2]);
		   break; 
		   case 'add_more_url':
		     showNotfySuccess(str);
		   break;
		   case 'send_email':
		     showNotfySuccess(str);
		   break;
		   case 'custom_msg':
		     showNotfySuccess(str);
		   break; 
		   
		   case 'search_users':
		    
		  if(str){
		     $('#default_users,#user_from_search').hide();
			 $('#default_users').after(str);
		   }
		   else $('#default_users').show();
		   break; 
		   
		   case 'reply_email':
		     showNotfySuccess(str);
		   break; 
		   case 'delete_message':
		     var spl = str.split(',');
			 
			 for (var i=0; i<=spl.length; i++){
				hide('#msg_'+spl[i]); 
			 }
		   break;
		   
		   case 'star_message':
		     
			 var spl = str.split(',');
			 
			 for (var i=0; i<=spl.length; i++){
				$('#star_'+spl[i]).addClass('starred'); 
			 }
		   break;
		   
		   case 'load_website_tour':
		    html("#hold_website", str);
		   break; 
		   
		   case 'create_step_tour':
		     trigger('.pick_target', 'click');
		     showNotfySuccess(str);
		   break;
		   
		   case 'save_step_tour':
		    var spl = str.split('::');
		     showNotfySuccess(spl[0]);
			 $('#create_tour_form').append('<input type="hidden" name="name_of_tour[]" id="name_of_tour" value="'+spl[1]+'" />');
			 trigger('#tour_step_name_modal .close','click');
		   break; 
		   
		   case 'write_review':
		      $('#write_review_form button').attr('disabled',false);
		      location.reload();
		   break; 
		   
		   case 'comment_review':
		   hide('.inlineLoader');
              var spl = str.split(":_:");
			  $('#comment_write'+spl[0]).before(spl[1]); 
		   break;
		   
		   case 'more_comment_review':
		   hide('.inlineLoader');
              var spl = str.split(":_:");
			  $('#comment_write'+spl[0]).before(spl[1]); 
		   break;
		   
		   
		   
		   case 'save_fill_in_question':
		   
		       var spl = str.split(":_:");
              showNotfySuccess(spl[0]);
			  trigger('#fill_in_survey_modal .close','click');
			  $('#fill_in_questions_values').val(spl[1]);
		   break;
		   
		    case 'save_multiple_choice_question':
		   
		       showNotfySuccess(str);
			  $('.copy1').remove();
			  $('#multiple_choice_questions_values').val(1);
			  
		   break;
		   
		   
		   case 'save_survey_from_tour_step':
		   hide('.survey_saving_result');
		  $('.survey_form_container').append('<div class="survey_saving_result"><strong>Save successfully, click next to continue</strong></div>');
			 $('.survey_img_loader').hide();
		   break;
		   
		   case 'save_slide_text':
		   showNotfySuccess(str);
		   break;
		   
		   case 'post_status':
		     $('.timeline-item').first().before(str);
			 $('.dropzone ').trigger("reset");
			 $('#text_image').val('');
			 $('#subject_title').val('');
			 $('.note-editable').html('');
			 $('.status-ref').trigger("click");
			 
		   break;
		   
		   case 'post_comment':
		     $('#comment_write'+$('#current_post_id').val()).before(str);
			 $('#comment_input_'+$('#current_post_id').val()).val('');
			 $('#comment_input_'+$('#current_post_id').val()).attr('placeholder','Write a comment.');
			 
		   break;
		   
		   case 'like_post':

			   var $postid = $('#current_post_id').val();;
			   $('#like_'+$postid).remove();
			   $('#like_outer_'+$postid).append(str);
		   break;
		   
		   case 'like_comment':
			  var $postid = $('#current_post_id').val();
			  var $commentid = $('#current_comment_id').val();
			  $('#like_comment_span'+$postid+"_"+$commentid).html(str);
		   break;
		   
		   case 'all_comment':  
			  var $postid = $('#current_post_id').val();
			  $('#comment_write'+$postid).before(str);
			  
			  
		   break;
		   
		   
		   
		  case 'more_posts':
			  $('.timeline').append(str);	 
		  break;
		  
		  case 'share_post':
			trigger('.close', "click");
			var spl = str.split(':_:');
			//html('#load_newsfeed_alert_num', spl[0]+" new");
			$('.timeline-item').first().before(spl[1]).fadeIn(); 	 
		  break;
		  
		  case 'newsfeed_alert':
		  var spl = str.split(':_:');
		  $('#newsfeed_container').html(spl[1]);
		  break;
		  
		  case 'newsfeed_alert_new':
		  if(str!=0) $('#new_newsfeed_alert_num').html(str);
		  break;
                  case 'newsfeed_alert_seen':  
                   $('.newsfeed_like_alert').html('');
                  break;
		  
		  case 'friend_request_alert':
		  var spl = str.split(':_:');
		  $('#friend_request_container').html(spl[1]);
		  break;
		  
		  case 'message_alert':
		  var spl = str.split(':_:');
		  $('#new_message_container').html(spl[1]);
		  break;
		  
		  case 'friend_request_alert_new':
		  if(str!=0) $('#friend_request_new').html(str);
		  break;
		  
		  case 'message_alert_new':
		  if(str!=0) $('#message_new').html(str);
		  break;
		  
		  case 'update_profile_info':
		  showNotfySuccess(str);
		  break;
		  
		  
		  
		  

	}
	 
 }
   /**
 * @package:SmartEmail24
 * @scripts::errorCallBack()
 * @params:phone
 */
 function errorCallBack(ref, str){
 
   switch(ref){
		   case 'signin':
		      showNotfyError(str);
			  //hide('#login');
		   break;
		   case 'signup':
		   //show("#register");
		      //$('#registrationForm input').attr('disabled', false);
		      showNotfyError(str);
		      
		   break;
		   case 'logout':
		      showNotfyError(str);
		   break;
		   
		   case 'renew-pass-process':
		      showNotfyError(str);
		   break;
		   
		   case 'resetpass':
		      showNotfyError(str);
		   break
		   
		   case 'renew-forgot-pass-process':
		       showNotfyError(str);
 		   break;
		   
		   case 'edit-profile':
		       showNotfyError(str);
		   break;
		   case 'add_users':
		   showNotfyError(str);
		   break;
		   
		   case 'add_friend':
		   showNotfyError(str);
		   break;
		   
		   case 'reply_friend_request':
		   //showNotfyError(str);
		   break;
		   case 'add_plan':
		   showNotfyError(str);
		   break;
		   case 'update_plan':
		   showNotfyError(str);
		   break;
		   case 'loadmore_contact':
		    showNotfyError(str);
		   break;
		   
		   case 'create_page':
		    showNotfyError(str);
		   break;
		   case 'create_blog':
		     showNotfyError(str);
			  $(".addblogForm button").attr('disabled', false);
		   break;
		   case 'create_coupon':
		     showNotfyError(str);
		   break;
		   case 'update_page':
		     showNotfyError(str);
		   break;
		   case 'update_blog':
		     showNotfyError(str);
		   break;
		   case 'update_coupon':
		     showNotfyError(str);
		   break;
		   
		    case 'delete':
		     showNotfyError(str);
		   break;
		   case 'add_more_url':
		     showNotfyError(str);
		   break;
		   case 'send_email':
		     showNotfyError(str);
		   break;
		   case 'custom_msg':
		     showNotfyError(str);
		   break;
		   case 'search_users':
            showNotfyError(str);
		   break;
		   case 'reply_email':
		     showNotfyError(str);
		   break; 
		   case 'delete_message':
		     showNotfyError(str);
		   break;
		   
		   case 'star_message':
		     showNotfyError(str);
		   break;
		   case 'load_website_tour':
		    showNotfyError(str);
		   break;
		   
		   case 'create_step_tour':
		     showNotfyError(str);
		   break;
		   
		   case 'save_step_tour':
		     showNotfyError(str);
		   break; 
		   
		   case 'write_review':
		    showNotfyError(str);
		   break; 
		   
		   case 'comment_review':
               showNotfyError(str);
		   break;
		   
		   case 'save_fill_in_question':
              showNotfyError(str);
		   break;
		   
		   case 'save_survey_from_tour_step':
		     $('.survey_saving_result').hide();
		     $('.addwebtour-survey-form').append('<div class="survey_saving_result"><strong>An error occured, try again</strong></div>');
			 $('.addwebtour-survey-form').show();
			 $('.survey_img_loader').hide();
		   break;
		   
		  case 'post_status':
		   showNotfyError(str);
		  break;
		  
		  case 'post_comment':
		     showNotfyError(str);
		  break;
		  
		  case 'like_post':
			showNotfyError(str); 
		  break;
		  
		  case 'like_comment':
              showNotfyError(str); 
		  break;
		  
		  case 'all_comment':
			  showNotfyError(str);		 
		  break;
		  
		  case 'more_posts':
			  showNotfyError(str);		 
		  break;
		  
		  case 'share_post':
			trigger('.close', "click");
			showNotfyError(str);	 
		  break;
		  
		  case 'newsfeed_alert': break;
		  case 'newsfeed_alert_new':  break;
                  case 'newsfeed_alert_seen':  break;
		  case 'friend_request_alert':;break;
		  case 'friend_request_alert_new': break;
		  case 'message_alert_new': break;
		  
		  case 'update_profile_info':
		  showNotfyError(str);
		  break;
		  
	}
 }
   /**
 * @package:SmartEmail24
 * @scripts::failureCallBack()
 * @params:phone
 */
 function failureCallBack(ref, str){
   switch(ref){
		   case 'login':
		      showNotfyError(str);
			  hide('#login'); 
		   break;
		   case 'signup':
		   show("#register");
		      $('#registrationForm input').attr('disabled', false);
		      showNotfyError(str);
		      
		   break;
		   case 'logout':
		      showNotfyError(str);
		   break;
		   
		   case 'renew-pass-process':
		   showNotfyError(str);
		   break;
		   
		   case 'resetpass':
		   showNotfyError(str);
		   break;
		   
		   case 'renew-forgot-pass-process':
		   showNotfyError(str);
		   break;
		   
		   case 'edit-profile':
		   showNotfyError(str);
		   break;
		   
		   case 'add_users':
		   showNotfyError(str);
		   break;
		   case 'add_friend':
		   showNotfyError(str);;
		   break;
		   case 'reply_friend_request':
		   //showNotfyError(str);
		   break;
		   case 'add_plan':
		   showNotfyError(str);
		   break;
		   case 'update_plan':
		   showNotfyError(str);
		   break;
		   case 'loadmore_contact':
		   showNotfyError(str);
		   break;
		   
		   case 'create_page':
		    showNotfyError(str);
		   break;
		   case 'create_blog':
		     showNotfyError(str);
			  $(".addblogForm button").attr('disabled', false);
		   break;
		   case 'create_coupon':
		     showNotfyError(str);
		   break;
		   case 'update_page':
		     showNotfyError(str);
		   break;
		   case 'update_blog':
		     showNotfyError(str);
		   break;
		   case 'update_coupon':
		     showNotfyError(str);
		   break;
		   case 'delete':
		     showNotfyError(str);
		   break;
		   case 'add_more_url':
		     showNotfyError(str);
		   break;
		   case 'send_email':
		     showNotfyError(str);
		   break;
		   case 'custom_msg':
		     showNotfyError(str);
		   break;
		   case 'search_users':
		     showNotfyError(str);
		   break;
		    case 'reply_email':
		     showNotfyError(str);
		   break;
		   break;
		    case 'delete_message':
		     showNotfyError(str);
		   break;
		   
		   case 'star_message':
		     showNotfyError(str);
		   break;
		   
		   case 'load_website_tour':
		    showNotfyError(str);
		   break;
		   
		   case 'create_step_tour':
		     showNotfyError(str);
		   break;
		   
		   case 'save_step_tour':
		     showNotfyError(str);
		   break;
		   
		   case 'write_review':
		    showNotfyError(str);
		   break;
		   
		   case 'comment_review':
               showNotfyError(str);
		   break;
		   
		   
		  case 'post_status':
		   showNotfyError(str);
		  break;
		  
		  case 'post_comment':
		     showNotfyError(str);
		  break;
		  
		  case 'like_post':
			showNotfyError(str); 
		  break;
		  
		  case 'like_comment':
              showNotfyError(str); 
		  break;
		  
		  case 'all_comment':
			  showNotfyError(str);		 
		  break;
		  
		  case 'more_posts':
			  showNotfyError(str);		 
		  break;
		  
		  case 'share_post':
			trigger('.close', "click");
			showNotfyError(str);	 
		  break;
		  
		  case 'newsfeed_alert': break;
		  case 'newsfeed_alert_new':  break;
                  case 'newsfeed_alert_seen':  break;
		  case 'friend_request_alert':;break;
		  case 'friend_request_alert_new': break;
		  case 'message_alert_new': break;
		  case 'update_profile_info':
		  showNotfyError(str);
		  break;
		   
	}
 }
 
 /*Change cover photo page*/
function ajaxFileUpload(url, selector, ref, text) {

	var formData = new FormData($("form"+selector)[0]);

	$.ajax({
		type: 'POST',
		contentType :'multipart/form-data',
		url:  url,
		data: formData,
		dataType:"json",
		async: false,
		beforeSend:function(){
			loadProgressBarFrontEnd();
			
			if(selector == 'addPageForm'){
			    $('#'+ref).after(' <img src="'+inlineLoader+'" class="inlineLoader" >');	
			}
		},
		success: function (data) {

			if(data.status == 1){
			  
			  if(data.ref=="mail_attach"){
				$('#attach_file').after("Your File:"+data.msg); 
				$('#attach').val(data.msg); 
			  }
			  
			  if(data.ref=="article_photo"){
				$('#article_photo_').val(data.msg); 
			  }
			  
			 if(data.ref=="user_photo"){
			  $('#user_photo').val(data.msg); 
			 }
			 
			 if(data.ref==ref){
			  showNotfySuccess(data.msg);
			 }

			}
			else {
				showNotfyError(data.msg);
			}
		},
		complete:function(){
           hide('.ajaxLoader, .inlineLoader');
		   
		},
		cache: false,
		contentType: false,
		processData: false
	});

}

  // filter out some nasties
  function filterData(data){
    data = data.replace(/<?\/body[^>]*>/g,'');
    data = data.replace(/[\r|\n]+/g,'');
    data = data.replace(/<--[\S\s]*?-->/g,'');
    data = data.replace(/<noscript[^>]*>[\S\s]*?<\/noscript>/g,'');
    data = data.replace(/<script[^>]*>[\S\s]*?<\/script>/g,'');
    data = data.replace(/<script.*\/>/,'');
    return data;
  }
  
  function doAjax(url){
	  var container = $('#hold_website');
    // if it is an external URI
    if(url.match('^http')){
      // call YQL
      $.getJSON("http://query.yahooapis.com/v1/public/yql?"+
                "q=select%20*%20from%20html%20where%20url%3D%22"+
                encodeURIComponent(url)+
                "%22&format=xml'&callback=?",
        // this function gets the data from the successful 
        // JSON-P call
        function(data){alert(data);
          // if there is data, filter it and render it out
          if(data.results[0]){
            var data = filterData(data.results[0]);
            container.html(data);
          // otherwise tell the world that something went wrong
          } else {
            var errormsg = "<p>Error: can't load the page.</p>";
            container.html(errormsg);
          }
        }
      );
    // if it is not an external URI, use Ajax load()
    } else {
      $('#hold_website').load(url);
    }
  }
  
  function destroyProcessingPanel(panel){
	 setTimeout(function(){
            panel_refresh(panel);
        },3000);  
  }
  
  
/* End of file helper.js */
/* Location: base_url/js/helper.js */
