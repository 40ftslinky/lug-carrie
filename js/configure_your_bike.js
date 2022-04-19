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
			} else {
				var hsd = $(".bikes_checkbox input[type=checkbox][value=hsd]");
				var gsd = $(".bikes_checkbox input[type=checkbox][value=gsd]");	
				var gsd_val=$(gsd).val();				
				$(gsd).prop("checked",true);
				$(hsd).prop("checked",false);
			}
		}
		
		// Hide & Show Bike Accessories onClick.
		jQuery(".checkbox .checkbox-input").click(function (e) {
			var selected_val = jQuery(this).val();
			if ($('.checkbox input[type=checkbox][value='+selected_val+']').is(':checked')) {
				// is checked , show img
				$("#"+ selected_val).css('opacity', '1');
			} else {
				// not checked, hide img.
				$("#"+ selected_val).css('opacity', '0');
			}
		});
});