(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 */
	//  * $(function() {
	//  *
	//  * });
	 /*
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	
	$(document).ready(function() {
	   //Insert Function
	 $('form').submit(function(event) {
		var formData = {
            name  : $('input[name=name]').val(),
			email : $('input[name=email]').val(),
			nonce : $('input[name=wp1_nonce]').val(),
			id : $('input[name=update_check]').val(),
			action :	'sub_form_wp',
		};
		event.preventDefault();

		//Updating values in table if it is Update Request
		if(formData.id)
			$('#preset_name-' + formData.id).text(formData.name);
			$('#preset_email-' + formData.id).text(formData.email);
			//console.log($('#preset_name-' + name).text);

		$.ajax({
			type  : 'post', 
			dataType : "json",
			url : front_ajax_object.ajaxurl, 
            data  : formData, 
			//dataType : 'json',
			
			success: function( response ) {
				if( response.success == "yes" ) {
					// console.log(response);
					// triggerr close event
					$('#exampleModalCenter').modal('toggle');
					$('#name').val('');
					$('#email').val('');
					$('#update_check').val('');
					// create new table row
					$('#table1 > tr:first').prepend(response.data_html);
				} else{
					$('#res-msg').html(response.message);
					// triggerr close event
				}
				}
		});	
	   })
	});

	

})( jQuery );

//DELETE Function
function form_f(user_id){
	var $ = jQuery;
	$.ajax({
		url : front_ajax_object.ajaxurl,
		type  : 'post', 
		dataType : "json",	
		data  : {
			id : user_id,
			action:	'del_data',
		}, 
		
		success: function( response ) {
			if( response.success == "delete" ) {
				$('#jbz-row-'+user_id).remove();
			}
		}
	});
}


//Editing Model Function
function add_atr(name, email, id){
	var $ = jQuery;
	$('#name').val(name);
	$('#email').val(email);
	$('#update_check').val(id);
}

//clearing values 
function clear_data(){
	var $ = jQuery;
	$('#name').val('');
	$('#email').val('');
	$('#update_check').val('');
}