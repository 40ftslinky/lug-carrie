jQuery(document).ready(function($) {
		// Click Bike Button Title 
	    jQuery(".tabs .bike_title").click(function (e) {
			e.preventDefault();
			if($( this ).hasClass( "_gsd" )==true){
				var bike_type="gsd";
			} else {
				var bike_type="hsd";
			}			
			bike_select_change(bike_type);
		});
		
		// Click Bike Button Images 
	    jQuery(".bikes_checkbox .checkbox-wrapper").click(function (e) {
			var sel_val = $(this).find("input").val();
			bike_select_change(sel_val);
		});
		
		// Changes selected checkboxes and active titles
		function bike_select_change(bike_type){
			$(".bike_select .bike_title").removeClass('active');
			$(".bike_select ._" + bike_type).addClass('active');
			if(bike_type=="hsd"){
				var hsd = $(".bikes_checkbox input[type=checkbox][value=hsd]");
				var gsd = $(".bikes_checkbox input[type=checkbox][value=gsd]");
				$(hsd).prop("checked",true);
				$(gsd).prop("checked",false);
				// show correct preconfig
				jQuery(".bike_family_GSD").hide();
				jQuery(".bike_family_HSD").show();
				// show base img 
				jQuery(".config_img_block").hide();
				jQuery(".img_block_hsd").show(); //
				jQuery(".img_block_hsd .base_img").css('opacity', '1');
				jQuery(".img_block_gsd .base_img").css('opacity', '0');
				// show correct accessories 
				jQuery("#accessories_01t5g000003NtmiAAC").show();
				jQuery("#bike_config_desc_gsd").hide();
				jQuery("#bike_config_desc_hsd").show();
				jQuery("#bike_desc_gsd").hide();
				jQuery("#bike_desc_hsd").show();							
				
				
			} else {
				var hsd = $(".bikes_checkbox input[type=checkbox][value=hsd]");
				var gsd = $(".bikes_checkbox input[type=checkbox][value=gsd]");	
				var gsd_val=$(gsd).val();				
				$(gsd).prop("checked",true);
				$(hsd).prop("checked",false);
				// show correct preconfigs
				jQuery(".bike_family_GSD").show();
				jQuery(".bike_family_HSD").hide();	
				// show base img 
				jQuery(".config_img_block").hide();
				jQuery(".img_block_gsd").show(); //Switch image TODO fix this 
				jQuery(".img_block_hsd .base_img").css('opacity', '0');
				jQuery(".img_block_gsd .base_img").css('opacity', '1');				
				jQuery("#accessories_01t5g000003NtmTAAS").show();	
				jQuery("#bike_config_desc_hsd").hide();
				jQuery("#bike_config_desc_gsd").show();
				jQuery("#bike_desc_hsd").hide();
				jQuery("#bike_desc_gsd").show();				
				
			}
		}
		

		jQuery(".bike_config_checkbox .checkbox-input").click(function (e) {
			var x = jQuery(this).val();
			console.log("PRECONFIG CLICKED :x=" + x);
			remove_all_accessories();
			var is_it_checked=0;
			if ($(this).is(':checked')) {		
				$("#col_right_wrap_Bikes .bike_config_checkbox .checkbox-input").prop("checked",false);
				$(this).prop("checked",true);
				is_it_checked=1;
			} else {
				$("#col_right_wrap_Bikes .bike_config_checkbox .checkbox-input").prop("checked",false);
				$(this).prop("checked",false);
			}
			
			//	
				var arrayLength = preconfigs[x].length;
				// hide all images first  
				jQuery(".config_img_block picture").css('opacity', '0');
				jQuery("._wrap .config_img_block").css('display', 'none');
				
						// loop through matching products & accessories for this preconfig
						for (var i = 0; i < arrayLength; i++) {
							var product_id = preconfigs[x][i];
							if(i==0){
								var bike_id = product_id;
								current_bike_id=bike_id;
							}
							console.log(preconfigs[x][i]);
							


							if ($(this).is(':checked')) {		
								if(i==0){
									//bike_01t5g000003NtmhAAC
									$(".bike_"+ bike_id).show();
									$(".bike_"+ bike_id + " .base_img").css('opacity', '1');									
									//$(".accessory_"+ product_id).css('opacity', '1');
									$('.checkbox input[type=checkbox][value='+product_id+']').prop("checked",true);
								} else {
									$("#img_block_"+ bike_id + " .accessory_"+ product_id).css('opacity', '1');
									$('.accessories_'+ bike_id + ' .checkbox input[type=checkbox][value='+product_id+']').prop("checked",true);
								}
							}
						}

				// show base img only 
				if(is_it_checked==0){
					if(hsd_or_gsd=="hsd"){
						jQuery(".img_block_hsd").show();
						jQuery(".hsd_base_img").css('opacity', '1');
						jQuery(".gsd_base_img").css('opacity', '0');
					} else {
						jQuery(".img_block_gsd").show();
						jQuery(".gsd_base_img").css('opacity', '1');
						jQuery(".hsd_base_img").css('opacity', '0');
					}
				}
				// do calculate_total
				calculate_total();
		});		
		
		
		
		
		// accessories
		var current_bike_id="01t5g000003NtmiAAC";
		var hsd_or_gsd = "hsd";
		jQuery(".checkbox-group .bike_title").click(function (e) {
			var selected_html = jQuery(this).html();
			if (selected_html.indexOf("HSD") >= 0){
				hsd_or_gsd = "hsd";
			} else {
				hsd_or_gsd = "gsd";
			}
			switch_bikes();
		});
		// Hide & Show Bike Types  onClick.
		jQuery(".bikes_checkbox .checkbox-input").click(function (e) {
			hsd_or_gsd = jQuery(this).val();	// selected preconfig
			switch_bikes();
		});
		
		function switch_bikes(){
			console.log("BIKES. =" + hsd_or_gsd);
			$("#gsd").css('opacity', '0');
			$("#hsd").css('opacity', '0');
			jQuery(".img_block_gsd").hide(); 
			jQuery(".img_block_hsd").hide(); 
			$(".gsd_base_img").css('opacity', '0');
			$(".hsd_base_img").css('opacity', '0');
			
			remove_all_accessories();
			
			if(hsd_or_gsd=="gsd"){
				//gsd selected 
				// is checked , show img
				$("#gsd").css('opacity', '1');
				jQuery(".img_block_gsd").show(); 
				$(".gsd_base_img").css('opacity', '1');
				// hide HSD accessories and show GSD access.
				jQuery("fieldset.checkbox-group .HSD").hide();				
				jQuery("fieldset.checkbox-group .GSD").show();
				current_bike_id="01t5g000003NtmhAAC";
			} else {
				// hsd selected 
				$("#hsd").css('opacity', '1');
				jQuery(".img_block_hsd").show(); 
				$(".hsd_base_img").css('opacity', '1');
				// hide GSD accessories and show HSD access.
				jQuery("fieldset.checkbox-group .GSD").hide();
				jQuery("fieldset.checkbox-group .HSD").show();	
				current_bike_id="01t5g000003NtmiAAC";				
			}
			// calc total
			calculate_total();
			
			
		}
		
		jQuery("#col_right_wrap_Passenger .checkbox-input").click(function (e) {
			var selected_val = jQuery(this).val();	// selected preconfig
			console.log("PASSENGER. checkbox selected_val=" + selected_val);
			if ($(this).is(':checked')) {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '1');	
			} else {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '0');	
			}
			calculate_total();
		});
		
		jQuery("#col_right_wrap_Cargo .checkbox-input").click(function (e) {
			var selected_val = jQuery(this).val();	// selected preconfig
			console.log("CARGO. checkbox selected_val=" + selected_val);
			if ($(this).is(':checked')) {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '1');	
			} else {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '0');	
			}
			
			calculate_total();
		});

		jQuery("#col_right_wrap_Add-On .checkbox-input").click(function (e) {
			var selected_val = jQuery(this).val();	// selected preconfig
			console.log("ADDON - checkbox selected_val=" + selected_val);
			if ($(this).is(':checked')) {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '1');	
			} else {
				jQuery(".bike_"+current_bike_id+" picture." + selected_val).css('opacity', '0');	
			}
			
			calculate_total();
		});		
		

		
});



	var current_tab = "Bikes";
	var next_tab = "Bikes";
	
	function configurator_back(){

			
			if(current_tab=="Bikes"){
				current_tab="Add-On";
			} else if(current_tab=="Passenger"){
				current_tab="Bikes";
			} else if(current_tab=="Cargo"){
				current_tab="Passenger";
			} else if(current_tab=="Add-On"){
				current_tab="Cargo";
			} else if(current_tab=="OrderOverview"){
				current_tab="Add-On";				
			}
			switch_config_tabs();
	}

	
	function configurator_next(){

			if(current_tab=="Bikes"){
				current_tab="Passenger";
			} else if(current_tab=="Passenger"){
				current_tab="Cargo";
			} else if(current_tab=="Cargo"){
				current_tab="Add-On";
			} else if(current_tab=="Add-On"){
				current_tab="OrderOverview";
			} else if(current_tab=="OrderOverview"){
				// submit form to go to teh  next page 
				jQuery(".select_checkbox_order_overview").submit();
			}
			
			switch_config_tabs();
	}
	
	function switch_config_tabs(){
		
		if(current_tab=="Bikes"){
				jQuery(".col_right_wrap").hide();
				jQuery("#col_right_wrap_Bikes").show();

			} else if(current_tab=="Passenger"){
				jQuery(".col_right_wrap").hide();
				jQuery("#col_right_wrap_Passenger").show();

			} else if(current_tab=="Cargo"){
				jQuery(".col_right_wrap").hide();
				jQuery("#col_right_wrap_Cargo").show();

			} else if(current_tab=="Add-On"){
				jQuery(".col_right_wrap").hide();
				jQuery("#col_right_wrap_Add-On").show();

			} else if(current_tab=="OrderOverview"){
				jQuery(".col_right_wrap").hide();
				order_overview_display();
				jQuery("#col_right_wrap_OrderOverview").show();

			}	
		
	}

	// This function execute when Ordre Over view is shown
	
	function order_overview_display(){
			// clear Overview section first 
			jQuery(".overview_fieldset").html('');
			
			// Loops through all checkboxes
			jQuery('.checkbox input[type=checkbox]').each(function (f) {
				
				// is check box is checked
				if (jQuery(this).is(':checked')) {
					//  copy the checkbox and put it in the Overview section
					var outer_html = jQuery(this).parent().parent().prop('outerHTML');
					console.log(outer_html);
					jQuery(".overview_fieldset").append(outer_html);
					
				}; // end if checked 
			});	// end each loop 
	}

	jQuery(document).ready(function() {
		jQuery('.progress_list li').on('click', function(t) {
			var val =jQuery(this).html();
			console.log(val);
			//global current_tab;
			current_tab=val;
			switch_config_tabs();
		});
	});
	
	function calculate_total(){
		console.log("calculate_total");
		// Loop through all checkboxes 
		var price_total = 0;
		jQuery('.checkbox input[type=checkbox]').each(function (f) {
			// if this is checked 
			if ($(this).is(':checked')) {

				var cb_data = jQuery(this).attr("data");
				if(typeof cb_data !== 'undefined') {
					console.log("cb_data = "+ cb_data);
					price_total = parseFloat(price_total) + parseFloat(cb_data);
				}
			}
		});
		var price_total_display = parseFloat(price_total).toFixed(2);
		jQuery(".sub_amount").html("$" + price_total_display);
		
	}
	
	
	
	// Compatibility 
	function check_compatability(ID){
		console.log("check_compatability ID="+ID);
		// make all checkboxes available 
		jQuery(".checkbox-input").prop('disabled', false);
		jQuery(".checkbox-input").parent().parent().removeClass('is_disabled');
		// Loops through all accessory checkboxes
		jQuery('.col_right_wrap_accessories input[type=checkbox]').each(function (f) {
			// is this checkboxed checked?
				var is_checked;
				if ($(this).is(':checked')) {
					is_checked=1;
					var checkbox_ID = jQuery(this).val();
					jQuery('.col_right_wrap_accessories input[type=checkbox]').each(function (g) {
						var other_checkbox_ID = jQuery(this).val();
						// iterate list of compatibilities 
						if(checkbox_ID!=other_checkbox_ID){
							var is_compatible=0;
							jQuery.each( compatibility, function( key, c_value ) {
								// is current compatibility for this checked checkbox
								if(c_value['accessory1Id']==checkbox_ID && c_value['accessory2Id']==other_checkbox_ID){
									// check all other
									is_compatible=1;
									console.log("*is compatible ["+key+"] ::  "+checkbox_ID+"  ::  "+other_checkbox_ID);	
								}
							});
							// if   no compatability is found  // must hide / disable this checkbox
							if(is_compatible==0){
								console.log("*is NOT compatible ::  "+checkbox_ID+"  ::  "+other_checkbox_ID);
								jQuery(".checkbox-input[value="+other_checkbox_ID+"]").prop('disabled', true);
								jQuery(".checkbox-input[value="+other_checkbox_ID+"]").parent().parent().addClass('is_disabled');
							}
						}
					});					
				} 

		});
		
		
		
	}
	
	
	// on click check the compatability 
	jQuery('.col_right_wrap_accessories input.checkbox-input').on('click', function(t) {
		// enable all accessory checboxes
		jQuery(".col_right_wrap_accessories .checkbox-input").prop('disabled', false);
		// loop through all the accessory checkboxes
		jQuery('.col_right_wrap_accessories input[type=checkbox]').each(function (f) {
			// if accessory is checked 
			if ($(this).is(':checked')) {		
				// check compatabilities for this accessory 
				var ID = jQuery(this).val();
				check_compatability(ID);
			} else {
				check_compatability(ID);
			}
		});
	});
	
	//remove_all_accessories()
	function remove_all_accessories(){
		console.log("remove_all_accessories()");
		//remove_all_accessories images
		jQuery(".fullwidth_col_left .accessory_pic").css('opacity', '0');
		// uncheck all accessories 
		jQuery(".outer_accessories_checkbox input[type=checkbox]").prop("checked",false);
		// enable all checbox
		 jQuery(".outer_accessories_checkbox .checkbox-input").prop('disabled', false);
	}
	
	//LEARN MORE
	function learn_more(ID){
		//learn_more
		//alert(ID)
		jQuery("#fullscreen2").show();
	}
	
	function learn_more_accessory(ID){
		//learn_more
		
		jQuery("#fullscreen2").show();
		console.log(accessories[ID]);
		var HTML=accessories[ID]['description'];
		jQuery("#fullscreen2 .accessory_detail #accessory_template_description").html(HTML);
		var IMG=accessories[ID]['highresUrl'];
		jQuery("#fullscreen2 #accessory_template_image").attr("src", IMG);
		HTML=accessories[ID]['accessoryName'];
		jQuery("#fullscreen2 .accessory_detail #accessory_template_name").html(HTML);
		HTML="$" + accessories[ID]['display_price'] + " " + accessories[ID]['priceType'];
		jQuery("#fullscreen2 .accessory_detail #accessory_template_price").html(HTML);
		
	}