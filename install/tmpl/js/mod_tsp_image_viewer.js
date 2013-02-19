jQuery(document).ready(function() {	

	//Show Banner
	jQuery("#TSP_IV_wrapper .main_image .desc").show(); //Show Banner
	jQuery("#TSP_IV_wrapper .main_image .block").animate({ opacity: 0.65 }, 1 ); //Set Opacity

	//Click and Hover events for thumbnail list
	jQuery("#TSP_IV_wrapper .image_thumb ul li").click(function(){ 
		//Set Variables
		var imgAlt = jQuery(this).find('img').attr("alt"); //Get Alt Tag of Image
		var imgDesc = jQuery(this).find('.block').html(); 	//Get HTML of block
		var imgID = jQuery(this).attr('id'); 	//Get ID of the image
		
		var imgDescHeight = jQuery("#TSP_IV_wrapper .main_image").find('.block').height();	//Calculate height of block	
		
		if (jQuery(this).is(".active")) {  //If it's already active, then...
			return false; // Don't click through
		} else {
			//Animate the Teaser				
			jQuery("#TSP_IV_wrapper .main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				jQuery("#TSP_IV_wrapper .main_image .block").html(imgDesc).animate({ opacity: 0.65,	marginBottom: "0" }, 250 );
				
				// Hide all previews
				jQuery("#TSP_IV_wrapper .main_image div#image_preview").css('visibility', 'hidden');
				
				// Show current preview
				jQuery("#TSP_IV_wrapper .main_image .image" + imgID).css('visibility', '');
			});
		}
		
		jQuery("#TSP_IV_wrapper .image_thumb ul li").removeClass('active'); //Remove class of 'active' on all lists
		jQuery(this).addClass('active');  //add class of 'active' on this list only
		return false;
		
	}).hover(function(){
		jQuery(this).addClass('hover');
		}, function() {
		jQuery(this).removeClass('hover');
	});
			
	//Toggle Teaser
	jQuery("#TSP_IV_wrapper a.collapse").click(function(){
		jQuery("#TSP_IV_wrapper .main_image .block").slideToggle();
		jQuery("#TSP_IV_wrapper a.collapse").toggleClass("show");
	});
	
});//Close Function