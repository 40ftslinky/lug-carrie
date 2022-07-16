<section id="stage_1" class="signup_intro centered ">
            <!-- <div class=""> -->


            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">

                        <div class="progress_timeline">
                            <ol class="progress_list">
								
								<?php
								if( $contact_type=="Consultation" || $book_type=="consultation" || $contact_type=="TestRide"){
									?>
                                <li class="current">Contact Info</li>
                                <li>Booking</li>	

								<?php 
								} else if ($contact_type=="Email") {  
								
								?>
                                <!-- <li class="current">Personal Info</li>
                                <li>Rider Info</li>		-->
								
								<?php } else{  ?>
									
                                <li class="current">Personal Info</li>
                                <li>Rider Info</li>									
								<li>Insurance + Storage</li>
                                <li>Ts+Cs</li>
									<?php
									}
									?>
							

                                
									<?php
	
										if($contact_type=="order"){
										
										?>											

									<?php
											}
									?>
                            </ol>
                        </div>
	
                    </div>
                </div> 
            </div>  
			<?php
			
			
				
				if($contact_type=="order"){
					$h4="We just need a little information from you to get things started.";
				} else if( $contact_type=="Consultation" || $book_type=="consultation"){
					$h4="Book a consultation";
				} else if( $contact_type=="Email"){
					$h4="Email my build";

				} else if( $contact_type=="TestRide"){
					$h4="Book a test ride";
				}
				
			?>
			<div class="_row top"> 
				<div class="column_80 center"> 
					<h4 class="blue" id="self_checkout_signup_stage01_title">
						<?php echo $h4; ?>
					</h4>			
				</div>
			</div>
            <div class="_row top _content"> 
                
                <div class="column_40 centered">                    
        
                    <div class="_wrap">
                        <div class="text_block left">

                           <?php
							
								if($contact_type=="order"){
								?>
                      
							 <p class="normal gray_800">We just need a photo of your driver’s licence or proof of address, and a photo of the location where you intend to store the bike.</p>
							 <?php
							 
								} else if($contact_type=="Consultation"){
                                    ?>
                                    <p>Thanks for your interest in Lug+Carrie!</p>
                                    <p>You’re in the right place if you’d like to book a no obligation call to:</p>
                                    <ul>
                                        <li>Discuss a bike setup that would work best for you. </li>
                                        <li>Find out more about our eBike subscription.</li>
                                        <li>Ask absolutely anything</li>
                                        <li> Sign up for a Lug+Carrie subscription!</li></ul>
                                    <p></p>
                                    <?php
                                                                
								} else if($contact_type=="TestRide"){
									?>
									<p>There's no better way to get a feel for our Lug+Carrie bikes than to come ride one!</p>
									<p>Our test rides include a short chat so we get you set up on the perfect bike, then we make sure you (and your kids, if they want to ride along) are comfortable before you set off.</p>
									<p>Start by providing some contact information, select your location, and on the next page you’ll be able to find a time that suits.</p>
									<?php
									
								} else if($contact_type=="Email"){	
									?>
									<p>A few contact details are all we need in order to email the details of your build.</p>
									<?php
								} else {
									?>
									<p>Thanks for your interest in Lug+Carrie! You’re in the right place if you’d like to book a consultation call with one of our experts. This is a no-obligation call where you can find out more about our eBike subscription, ask questions about eBikes, or discuss a bike set up that would work best for you. You can even sign up if you’re ready.</p>
									<p>All you need to do is provide a few contact details, pick the time that works best for you, and we’ll look forward to speaking with you then!</p>
									<?php
								}
								?>
                                                                    
                        </div>
                    </div>                 
        
                </div>
                
                <div class="column_40">
                    

                    <div class="_wrap form_block">
                        <div class="forms">
                            <form>
                                <fieldset> 
                                    <!-- <legend>Inputs as descendents of labels (form legend)</legend> -->


											<input type=hidden name="uuid" id="uuid">
                                    <label>
                                        <!-- Email input -->
                                        <input id="email" type="email" value="" placeholder="Email*">
                                        <div class="error_msg">Valid email required</div>
                                    </label>
									
                                    <!-- <label>

                                        <select id="salutation" name="salutation" >
													<option value="" disabled selected>Salutation</option>
													<option>Mr.</option>
													<option>Mrs.</option>
													<option>Miss</option>
													<option>Dr.</option>
													<option>Ms.</option>
												</select>
                                        <div class="error_msg ">error message</div>
                                    </label>	-->								
									
                                    <label>
                                        <!-- Email input -->
                                        <input id="firstName" type="text" value="" placeholder="First Name*">
                                        <div class="error_msg ">Name required</div>
                                    </label>
                                    <label>
                                        <!-- Email input -->
                                        <input id="lastName" type="text" value="" placeholder="Last Name*">
                                        <div class="error_msg ">Last name required</div>
                                    </label>

								<?php
																								
									if($contact_type=="order"){
										
									?>
									
									<div class="select_group">
										<label>Street Address
											<input type="text"  name="primaryRiderAddress_street" id="primaryRiderAddress_street"  placeholder="Street Address">
										</label>
									</div>
									<div class="select_group">
										<label>Suburb
											<input type="text"   name="primaryRiderAddress_city" id="primaryRiderAddress_city"  placeholder="Suburb">
										</label>
									</div>
									<div class="select_group">
										<div class="_w50  _group">
											<label>
												<!-- Select -->
												State:
												<select   name="primaryRiderAddress_state" id="primaryRiderAddress_state"  >
													<option value="Select" disabled selected hidden>Select</option>
													<option value="NSW">New South Wales</option>
															<option value="VIC">Victoria</option>
												</select>
											</label>
										</div>  
										<div class="_w50 _group">
											<label>Postcode
												<input type="text" placeholder="Postcode"   name="primaryRiderAddress_postcode" id="primaryRiderAddress_postcode"  >
											</label>
										</div>
									</div>
									<div class="select_group">
										<label>
											<!-- Phone input -->
											<input id="phone" class="telephone_input" type="tel" value="" placeholder="Phone*">
											<div class="error_msg ">Valid number required</div>
										</label>
									</div>

									<?php
										
									} else {
											
									?>

                                    <div class="select_group">

										<label>
                                            <!-- Phone input -->
                                            <input id="phone" class="telephone_input" type="tel" value="" placeholder="Phone*">
                                            <div class="error_msg ">Valid number required</div>
                                        </label>
										
										

                                        <label>
                                            <!-- Email input -->
                                            <input id="postcode" type="number" value="" placeholder="Postcode*">
                                            <div class="error_msg ">Postcode required</div>
                                        </label>                                
                                    </div>
										<?php
										
											} // end if else .....
										
										if( $contact_type=="TestRide" || $contact_type=="Consultation"){
											?>
											<div class="select_group">
                                        <label>
                                            <!-- Email input -->
													<script>
													function location_note(){
														var sydney_note="Sydney test rides start at the Short Street Reserve.";
														var melbourne_note="Melbourne test rides take off from our shop in Fitzroy.";
														var selected_location=jQuery("select#location").val();
														if(selected_location=="Sydney"){
															jQuery("#location_note").html(sydney_note);
														} else {
															jQuery("#location_note").html(melbourne_note);
														}
														<?php
														if($book_type!="consultation"){
															?>
															jQuery("#location_note").show();
															<?php
														}
														?>
													}
													</script>
													
													<?php
													
														?>
															<select id="location"   name="location" onchange="location_note();">
																	<option value="Location" disabled selected hidden >Location</option>
																	<option>Melbourne</option>
																	<option>Sydney</option>
															</select>
														<?php
													
													?>
													<div class="green_msg" id="location_note" style="display:none;"></div>
                                            <div class="error_msg ">Please select a location</div>
                                        </label>

                           
                                    </div>
											<?php
										} // end if $contact_type=="Consultation || TestRide
										
										?>
                                    <div class="select_group">
                                        <label class="checkbox">
                                            <input type="checkbox" id="consent" value="true">
                                                By clicking submit you consent to Lug + Carrie sending you electronic communications.
														
                                        </label>
												
                                    </div><div class="consent_error error_msg">You must check this box to continue</div> 
                                    <label class="right gray_600">
                                        * Mandatory Fields
                                    </label>										
									
                                    <div class="button_wrap_right">
												<a href="#"  onclick="back_to_bike_config_page();"  class="button naked_black goto" data-offset="80">back</a>
                                        <a href="#" onclick="form_next(2);" class="button white_btn goto"  data-offset="80">Next</a>
                                    </div>
                                </fieldset>
								<input type=hidden name="book_type"  id="book_type" value="<?php echo $book_type; ?>" />
                            </form>
							
						
							
                        </div>
                    </div>
                </div>                                  

            </div>      
        </section>
		
		<script>
		

		
		jQuery(document).ready(function() {
			jQuery(".telephone_input").focus(function() {
				var VAL = jQuery(this).val();
				if(VAL==""){
					jQuery(this).val("+61");
				}
			});		
		});
		
		function back_to_bike_config_page(){
		<?php
		$STR ="";
		
		if(!empty($_POST)){
			
			foreach($_POST as $key=>$post){
				print "\n";
				if(strstr($key,"price_")){
					
				} else {
					//print "<input type=hidden class='product_id' name='$key' id='$key' value='$key'>";
					if(!empty($STR)){$STR.="-";}
					$STR = $STR."$key";
				}

			}		
		}
		
		?>
		$QS = '?a=<?php echo $STR; ?>';
		$URL = "https://<?php echo $_SERVER['SERVER_NAME']; ?>/configure-your-bike" + $QS;
		window.location.href = $URL;	
		}
		</script>