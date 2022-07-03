 <section id="stage_1" class="signup_intro centered ">
            <!-- <div class=""> -->


            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">

                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li class="current">Personal Info</li>
                                <li>Rider Info</li>
                                
									<?php
									if($contact_type!="Email"){
									?>
									<li>Insurance + Storage</li>
                                <li>Ts+Cs</li>
								<?php
									}

										
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
					$h4="Email my design";

				} else if( $contact_type=="TestRide"){
					$h4="Book a test ride";
				}
				
			?>
			<div class="_row top"> 
				<div class="column_80 centered"> 
					<h4 class="blue" id="self_checkout_signup_stage01_title">
						<?php echo $h4; ?>
					</h4>			
				</div>
			</div>
            <div class="_row top"> 
                
                <div class="column_40 centered">                    
        
                    <div class="_wrap">
                        <div class="text_block left">

                           <?php
							
								if($contact_type=="order"){
								?>
                            <!--<p class="normal gray_800">
                                Do you love the bike you’ve created for yourself? Are you ready to discover Daily Life. Done Better?
                            </p>
                            <p class="normal gray_800">
                                Let’s get  started today! 
                            </p>
                            <p class="normal gray_800">                                
                                You can complete your Lug+Carrie application online, by providing us with some contact information. The whole application should only take a few minutes. 
                            </p>
                            <p class="normal gray_800">                                
                                Then;
                            </p>
                            <ol>
                                <li>We’ll review your application</li>
                                <li>You’ll pay a $44 deposit</li>
                                <li>Book a delivery date</li>
                                <li>45 minute handover experience and orientation</li>
                                <li>Ride into the sunset</li>
                                
                            </ol>
                            <p class="normal gray_800">                                
                                Our review typically takes a day to complete. 
                            </p>
                            <p class="normal gray_800">                                
                                Ready?
                             </p>
							 -->
							 <p class="normal gray_800">We just need a photo of your driver’s licence or proof of address, and a photo of the location where you intend to store the bike.</p>
							 <?php
							 
								} else if($contact_type=="TestRide"){
									?>
									<p>There's no better way to get a feel for our Lug+Carrie bikes than to come ride one!</p>
									<p>Our test rides include a short consultation to get you set up on the perfect bike, then we make sure you (and your kids, if they want to ride along) are comfortable before you set off. </p>
									<p>All you need to do is provide a few contact details, select your location, then pick the time that works best for you.</p>
									<p>One of our consultants will have a bike ready for you then, and don't forget to bring a helmet if you've got one!</p>
<!-- 									<p>*Please note: Our inventory of quality eBikes is currently very limited in Melbourne and Sydney. We will discuss availability with you when we call.</p> -->
									<?php
									
								} else if($contact_type=="Email"){	
									?>
									<p>There's no better way to get a feel for our Lug+Carrie bikes than to come ride one!</p>
									<p>Our test rides include a short consultation to get you set up on the perfect bike, then we make sure you (and your kids, if they want to ride along) are comfortable before you set off. </p>
									<p>All you need to do is provide a few contact details, select your location, then pick the time that works best for you.</p>
									<p>One of our consultants will have a bike ready for you then, and don't forget to bring a helmet if you've got one!</p>
									<?php
								} else {
									?>
									<p>Thanks for your interest in Lug+Carrie! You’re in the right place if you’d like to book a consultation call with one of our experts. This is a no-obligation call where you can find out more about our eBike subscription, ask questions about eBikes, or discuss a bike set up that would work best for you. You can even sign up if you’re ready.</p>
									<p>All you need to do is provide a few contact details, pick the time that works best for you, and we’ll look forward to speaking with you then!
									</p>
<!-- 									<p>*Please note: Our inventory of quality eBikes is currently very limited in Melbourne and Sydney. We will discuss availability with you when we call.</p> -->
									<?php
								}
								?>
                                                                    
                        </div>
                    </div>

                 <!--    <div class="_wrap _left white_bg">
                        <div class="text_block left">
                           <p class="normal gray_800">
                                <span style="display: block; float:left">*</span>Please note: Our inventory of quality eBikes is currently very limited in Melbourne and Sydney. We will discuss availability with you when we call.
                            </p> 
                        </div>
                    </div> -->
        
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
                                        <div class="error_msg">Vaild email required</div>
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
                                    <div class="select_group">
                                        <label>
                                            <!-- Email input -->
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
										
										if( $contact_type=="TestRide" || $contact_type=="Consultation"){
											?>
											<div class="select_group">
                                        <label>
                                            <!-- Email input -->
                                            <select id="location"   name="location">
															<option value="Location" disabled selected hidden >Location</option>
															<option>Melbourne</option>
															<option>Sydney</option>
													</select>
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