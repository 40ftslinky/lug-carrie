<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Book a Test Ride - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

	global $post;
	$slug = $post->post_name;



	if($slug=="email-design"){
		$book_type ="email-design";
		$contact_type="Email";

	}

	if(empty($book_type)){
		$book_type ="testride";
		$contact_type="TestRide";
	}
get_header(); ?>


	<!-- ::::book_type = <?php echo $book_type; ?>  -->

    <main>        

        <!-- ************************************* -->
        <!-- STAGE ONE --   -->
        <!-- ************************************* -->
       <?php
	   
		include "content-contact-section-01.php";
	   ?>
	   <!-- ************************************* -->
        <!-- STAGE TWO -->
        <!-- ************************************* -->
        <section  id="stage_2"  class="signup_intro centered " style="display:none">
            <div class="_row "> 
                <div class="column_100 ">
                    <div class="_wrap center">
                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Stage One</li>
                                <li class="current">Stage Two</li>
									<?php
									if($book_type!="email-design"){
										?>
										<li>Stage Three</li>
										<?php
									}
									?>
                                <!-- <li>Stage Four</li> -->
                            </ol>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="_row ">                 
                <div class="column_100">                    
                    <div class="_wrap">
                        <div class="text_block centered">
                            <?php
                            if($book_type=="testride"){
                            ?>	
                                <h4 class="blue">Book a Test Ride</h4>
                            <?php
                            } else {
                            ?>
                                <h4 class="blue">Book a Consultation</h4>
                            <?php
                            }
                            ?>	
                        </div>
                    </div>
                
                    <div class="column_40 centered">       							
                        <div class="_wrap">
                            <div class="text_block left">
								<?php
									if($book_type=="testride"){
									?>	  
										<h5>Pick a date & time</h5>
										
									<?php
									} else {
									?>
										<h5>Pick a date & time</h5>
<!-- 										<p> Consultation - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis dictum nisl. Vestibulum dapibus turpis non ornare iaculis. Curabitur tempor lacus quis nisl condimentum, scelerisque convallis risus semper. </p> -->
									<?php
									}
									?>	
                                
                            </div>	   
                        </div>  
                    </div>		

                    <div class="column_40 centered">       							
                        <div class="_wrap form_block">
                            <div class="text_block">
                                <form>
                                        <?php
                                            print "<!-- POST::::: ";
                                            print_r($_POST);
                                            print " -->";
                                            foreach($_POST as $key=>$post){
                                                print "\n";
                                                if(strstr($key,"price_")){
                                                    print "<input type=hidden class='product_price' name='$key' id='$key' value='$post'>";
                                                } else {
                                                    print "<input type=hidden class='product_id' name='$key' id='$key' value='$key'>";
                                                }
                                                print "\n";
                                            }
                                        ?>										
                                    <fieldset>
                                        <!-- <div class="input_date"><input id="booking_date" name="booking_date" type="date" value="2022-06-01"></div> -->
                                        <div class="content_calendar_outer">
                                            <?php
                                                include "content-calendar.php";
                                            ?>
                                        </div>
                                        <div class="button_wrap_right">
                                            <a href="#stage_two" onclick="form_next(3);" class="button white_btn goto"  data-offset="80">Next</a>
                                        </div>
                                    </fieldset>
                                
                                </form>
                            </div>
                        </div>  
                    </div>		
					
                </div>
			</div>					
        </section> 
	   
	   
	   
        <!-- ************************************* -->
        <!-- STAGE THREE -->
        <!-- ************************************* -->
        <section  id="stage_3"  class="signup_intro centered " style="display:none">
            <div class="_row "> 
                <div class="column_100 ">
                    <div class="_wrap center">
                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Stage One</li>
                                <li>Stage Two</li>
                                <li class="current">Stage Three</li>
                                <!-- <li>Stage Four</li> -->
                            </ol>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="_row ">                 
                <div class="column_100">                    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h4 class="blue">
                                 Appointment Confirmation
                            </h4>
                        </div>
                    </div>
                
                    <div class="column_40 centered">       							
                        <div class="_wrap">
                            <div class="text_block left">
								
								<div class="booking_conf _panel">
									
                                <p>Your appointment ID is <strong><span id="appointment_id"></span></strong></p>
                                <p>Location: <strong><span id="appointment_location"></span></strong></p>
                                <p>Date: <strong><span id="appointment_date"></span></strong></p>
                                <p>Start Time: <strong><span id="appointment_start_time"></span></strong></p>
                                <p>End Time: <strong><span id="appointment_end_time"></span></strong></p>
																		
								</div>
                                
                                <?php
									if($book_type=="testride"){
									?>	  
										<h5>Thank you!</h5>
										<p>Your test ride is booked! Look out for an email from us confirming the date and time.  </p>
										<p>Need to cancel or reschedule? It happens. Send an email to <a href="mailto:info@lug-carrie.com">info@lug-carrie.com</a> and we’ll help you out.
										<p>We look forward to speaking with you!</p>
										
									<?php
									} else {
									?>
										<h5>Thank you!</h5>
										<p>Your consultation has been booked. Look out for an email from us confirming the date and time.  </p>
										<p>Need to cancel or reschedule? It happens. Send an email to <a href="mailto:info@lug-carrie.com">info@lug-carrie.com</a> and we’ll help you out.
										<p>We look forward to speaking with you!</p>
									<?php
									}
									?>	
                            </div>	   
                        </div>  
                    </div>		
					
                </div>
			</div>					
        </section> 
	   

        <!-- ************************************* -->
        <!-- STAGE FOUR -->
        <!-- ************************************* -->
        <section  id="stage_4"  class="signup_intro centered " style="display:none">
            <div class="_row "> 
                <div class="column_100 ">
                    <div class="_wrap center">
                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Stage One</li>
                                <li>Stage Two</li>
                                <li>Stage Three</li>
                                <!-- <li class="current">Stage Four</li>    -->
                            </ol>
                        </div>

                    </div>
                </div> 
            </div>
            <div class="_row ">                 
                <div class="column_100">                    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h4 class="blue">
                                 Thank you.
                            </h4>
                        </div>
                    </div>
                
                    <div class="column_40 centered">       							
                        <div class="_wrap">
                            <div class="text_block left">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>	   
                        </div>  
                    </div>							
                </div>
			</div>					
        </section> 
	   




</main>
<!--  end of template -->

<script>
// to do move this to proper js file 
function form_next(x){
	waiting_for_response();
	// is buitton disabled
	if ( $( this ).hasClass( "disabled" ) ) { console.log('disabled'); return "disabled";}
	$verified =1;
	var storageLockingAcknowledgement = false;
	var insuranceAgreement = false;	
	var $data=new Array();
	// form 1
	$data['uuid']=jQuery("input#uuid").val();
	$data['email']=jQuery("input#email").val();
	$data['firstName']=jQuery("#firstName").val();
	$data['lastName']=jQuery("#lastName").val();
	$data['phone']=jQuery("#phone").val();
	$location=jQuery("select#location").val();
	$data['postcode']=jQuery("input[type=number]#postcode").val();
	

	
	// Verify fields 
	if(x==2){
		// do some verifications here?
		var book_type = jQuery("#book_type").val();
		if(book_type!="email-design"){
			if($location == null) {
				$verified=0;	// location is empty 
				jQuery("select#location").next().addClass('visible');
			} else {
				jQuery("select#location").next().removeClass('visible');
			}
		}
		if(($data['email']=="")){
			// email is empty
			$verified=0;
			// show message
			jQuery("input#email").next().addClass('visible');
		} else {
			jQuery("input#email").next().removeClass('visible');
		}
		if(($data['firstName']=="")){
			// firstName is empty
			$verified=0;
			// show message
			jQuery("input#firstName").next().addClass('visible');
		} else {
			jQuery("input#firstName").next().removeClass('visible');
		}
		
		if(($data['lastName']=="")){
			// lastName is empty
			$verified=0;
			// show message
			jQuery("input#lastName").next().addClass('visible');
		} else {
			jQuery("input#lastName").next().removeClass('visible');
		}		
		
		if(($data['phone']=="")){
			// phone is empty
			$verified=0;
			// show message
			jQuery("input#phone").next().addClass('visible');
		} else {
			jQuery("input#phone").next().removeClass('visible');
		}
		if(($data['postcode']=="")){
			// postcode is empty
			$verified=0;
			// show message
			jQuery("input#postcode").next().addClass('visible');
		} else {
			jQuery("input#postcode").next().removeClass('visible');
		}	
		// is consent checkbox checked? 
		if(jQuery("input#consent").is(":checked")) {
			console.log("is checked");
			jQuery(".consent_error").removeClass('visible');
		} else {
			console.log("is not checked");
			jQuery(".consent_error").addClass('visible');
			$verified=0;
		}
	}
	
	if($verified==1){



			
				// new array for product_ids
				var products =new Array();
				// loops through all hidden product_id fields...
				jQuery( "input.product_id" ).each(function() {
					
					var p_id = jQuery( this ).val();
					var p_price =jQuery("#price_" + p_id).val();
					var product_value = new Array(p_id, p_price);
					
					products.push(product_value);	// add to array 
				});

				var data = {
					action: 'post_booking',
						<?php
						if($book_type=="testride"){
						?>	
                            type: 'Test Ride',
						<?php
						} else if($book_type=="email-design"){
						?>
							type: 'Email',
						<?php
						
						} else {
						?>
							type: 'Consultation',
						<?php
						}
						?>						
					
					uuid: $data['uuid'],
					email: $data['email'],
					firstName: $data['firstName'],
					lastName: $data['lastName'],
					phone: $data['phone'],
					postcode: $data['postcode'],
					location: $location,
					products: products
				};		

					appointmentDate=jQuery("#start_date").val();
					startTime=jQuery("#start_time").val();
					endTime=jQuery("#end_time").val();				

					if(appointmentDate!=""){
						data['appointmentDate']= appointmentDate;
					}
					if(startTime!=""){
						data['startTime']= startTime;
					}
					if(endTime!=""){
						data['endTime']= endTime;
					}
				
			// only send to API if last screen 


					jQuery.post('/wp-admin/admin-ajax.php' , data, function(response) {
						
						response_received();
						
						
							

						
						if(response != "0") {
							// response is good 
							console.log("1)) post_booking : " +response);
							if(book_type!="email-design"){

								// check if Appointment ID is returned 
								if (response.indexOf("serviceAppointmentId=") >= 0){
									const results = response.split("=");
									var serviceAppointmentId = results[1];
									console.log(serviceAppointmentId);
									var appointment_location = results[2];								
									var appointmentDate = results[3];								
									var appointment_start_time = results[4];			
									var appointment_end_time = results[5];								
									jQuery("#appointment_id").html(serviceAppointmentId);
									jQuery("#appointment_location").html(appointment_location);
									jQuery("#appointment_date").html(appointmentDate);		
									jQuery("#appointment_start_time").html(appointment_start_time);									
									jQuery("#appointment_end_time").html(appointment_end_time);								
									
									
								} else {
									// is not Appointment ID , process the array ...... 
									// split returned string into an array 
									const results = response.split("|");
									$uuid = results[0];	// first row is the uuid 
									// get the uuid and put in hidden field
									jQuery("#uuid").val($uuid);

									// loop through array and get Appointment Times
									var appointments = new Array();
									$.each( results, function( key, row_value ) {
										if(key>0){
											const appointment = row_value.split(",");
											console.log(appointment);
											var a_date = appointment[0];

											// split date into array
											var date_array =a_date.split('-');
											// reformat date from "2022-06-28" into format like "28/06/22"
											var new_date_format = date_array[2] + '/' + date_array[1] + '/' + date_array[0].slice(-2);									
										
											var atime = appointment[1];
											var end_time= appointment[2];
											if(end_time!=undefined){
												if(available_dates_end_times[a_date] == undefined){
													available_dates_end_times[a_date]= new Array();
												}
												if(available_dates_end_times[a_date][atime] == undefined){
													available_dates_end_times[a_date][atime]= new Array();
												}
												available_dates_end_times[a_date][atime]=end_time;
												console.log(available_dates_end_times);
											}
											
											if(new_date_format!=undefined && atime!=undefined){
												if(appointments[new_date_format] == undefined){
													appointments[new_date_format]= new Array();
												}
												appointments[new_date_format].push(atime);
											}
										}
									});
									available_dates = appointments;
									calendar_content_html();
								}
							} else {
								
								jQuery("#stage_2 h4").html("Email confirmation");
								jQuery("#stage_2 div.right form").hide();
								jQuery("#stage_2 div.left p").html("Email confirmation. Lorem ipsum curabitur tempor lacus quis nisl condimentum, scelerisque convallis risus semper.");
							}
							go_form_back(x);
						} else {
							// response is 0, error 
							console.log("2)) post_booking :    " + response);
							alert("An error has occurred.");
							go_form_back(x);
						}

					});

			} else {
				console.log('form not valid. missing elements');
				response_received();
				//	go_form_back(x);
			}
	

}




function  go_form_back(x){
	//hide all sections
	jQuery("section.signup_intro").hide();
	// show "x" section 
	jQuery("section#stage_" + x).show();
}

</script>






<?php
get_footer();