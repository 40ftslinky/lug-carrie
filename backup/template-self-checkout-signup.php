<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Self-checkout - Sign-up & Manual-checkout
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];





get_header(); 

// Testing UUID = b3701b64-b9ef-46a6-9494-66c81e86355b
// if UUID is sent in the Query string
if(!empty($_GET['uuid'])){
	?>
	<script>
		jQuery(document).ready(function() {
				// put uuid from querysting in the form's hidden field.
			var $uuid = "<?php echo $_GET['uuid']; ?>";	
			jQuery("#uuid").val($uuid);
		});
	</script>
	<?php
}

$url="https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/metadata";
$metadata = doAPI($url);

print "<!--  ";
print "   \n\n\n  metadata::::  ";
print_r($metadata);

print " \n\n \n";
print " -->";

$meta_array= Array();

foreach($metadata as $meta){
	
	$apiFieldName = $meta->apiFieldName;
	
	$meta_array[$apiFieldName] = Array();
	$meta_array[$apiFieldName]['fieldLabel'] = $meta->fieldLabel;
	$meta_array[$apiFieldName]['picklistValues'] = $meta->picklistValues;
	
	print "<!--    apiFieldName:    $apiFieldName               -->";
	
	
}
	   global $post;
		$page_slug = $post->post_name;
		
	   print "<!-- page_slug = $page_slug;  -->";


							
							if($page_slug=="manual-checkout"){
								?>
								<style>
								.progress_timeline_outer {
										display:none;
								}
								
								</style>
								<script>
								//
								jQuery(document).ready(function() {
								
										console.log("manual-checkout");
										jQuery("#stage_1").hide();
										jQuery("#stage_6").show();
								
								});
								</script>
								
								<?php
								
								
							}
							
							?>
<script>
														function primary_ImageUrl(e){
																	var $data=new Array();
																	waiting_for_response();
																	$data['uuid']=jQuery("input#uuid").val();
																	$data['email']=jQuery("input#email").val();
																	$data['firstName']=jQuery("#firstName").val();
																	$data['lastName']=jQuery("#lastName").val();
																	if(e==1){
																		var file_data = jQuery("#upload_one").prop('files')[0];
																		
																	} else if(e==2){	
																		var file_data = jQuery("#upload_two").prop('files')[0];
																	} else if(e==3){	
																		var file_data = jQuery("#upload_three").prop('files')[0];
																	} else if(e==4){	
																		var file_data = jQuery("#upload_four").prop('files')[0];
																	} else if(e=="storage1"){	
																		var file_data = jQuery("#filebikeStorageImageURLs1").prop('files')[0];																		
																	} else if(e=="storage2"){	
																		var file_data = jQuery("#filebikeStorageImageURLs2").prop('files')[0];		
																	} else {	
																		
																	}
																	// data to send to PHP function 
																	form_data = new FormData();
																	form_data.append('file', file_data);		
																	form_data.append('action', "post_upload_image");
																	form_data.append('type', "order");
																	form_data.append('uuid', $data['uuid']);
																	form_data.append('email', $data['email']);
																	form_data.append('firstName', $data['firstName']);
																	form_data.append('lastName', $data['lastName']);
																	
																	jQuery.ajax({
																		url: '/wp-admin/admin-ajax.php', // point to server-side PHP script 
																		dataType: 'text',  // what to expect back from the PHP script, if anything
																		cache: false,
																		contentType: false,
																		processData: false,
																		data: form_data,                         
																		type: 'post',
																		success: function(res){
																			// response from the PHP  script 
																			console.log(res);
																			if(res=="extension_error"){
																				// wrong type of file has been uploaded by the user
																				alert("You cannot upload a file of this type.");
																			} else {
																				// put url of uploaded file into the hidden fields in the form
																				console.log(file_data);
																				var filedata_name = file_data['name'];
																				
																				if(e==1){
																					jQuery("#primaryRiderIdentificationImageUrl").val(res);
																					jQuery(".upload_2_outer").css('opacity', '1');
																					var next_elem = jQuery("#upload_one").next();	
																				} else if(e==3){	
																					jQuery("#additionalRiderIdentificationImageUrl").val(res);
																					var next_elem = jQuery("#upload_three").next();	
																					jQuery(".upload_4_outer").css('opacity', '1');
																				} else if(e==4){	
																					jQuery("#additionalRiderIdentificationImageUrl2").val(res);
																					var next_elem = jQuery("#upload_four").next();	
																				} else if(e=="storage1"){	
																					jQuery("#bikeStorageImageURLs1").val(res);		
																					var next_elem = jQuery("#filebikeStorageImageURLs1").next();
																				} else if(e=="storage2"){	
																					jQuery("#bikeStorageImageURLs2").val(res);		
																					var next_elem = jQuery("#filebikeStorageImageURLs2").next();																					
																				} else if(e==2){	
																					jQuery("#primaryRiderIdentificationImageUrl2").val(res);
																					var next_elem = jQuery("#upload_two").next();		
																				}
																				var file_field_id="asset_" + e;
																				var CSS = "<style>.new_style_"+file_field_id+" {color:black !important;} .new_style_"+file_field_id+":after {content: \""+filedata_name+"\" !important;}</style>";
																				jQuery('footer').append(CSS);
																				jQuery(next_elem).addClass("new_style_"+file_field_id+"");	
																				jQuery(next_elem).parent().append('<span class="upload_complete">Upload Complete</span>');
																				response_received();																			
																				
																				//jQuery(next_elem).attr('data-before',filedata_name);
																			}
																		}
																	});

														}
											

									function additional_riders_checkbox_function(){
										if(jQuery("input#additional_riders_checkbox").is(":checked")) {
										
											jQuery(".additional_riders").show();
										
										} else {
											jQuery(".additional_riders").hide();
										}
									}
									
									</script>


    <main>        

        <!-- ************************************* -->
        <!-- STAGE ONE -- SELF CHECKOUT -->
        <!-- ************************************* -->

       <?php
	   
	   
	   $contact_type="order";
	   
		include "content-contact-section-01.php";
	   
	   
	   ?>

        <!-- ************************************* -->
        <!-- STAGE TWO -->
        <!-- ************************************* -->

        <section  id="stage_2"  class="signup_intro centered " style="display:none">
            <!-- <div class=""> -->
            <div class="_row "> 
            
                <div class="column_100 progress_timeline_outer">
                    <div class="_wrap center">

                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Personal Info</li>
                                <li class="current">Rider Info</li>
                                <li>Insurance + Storage</li>
                                <li>Ts+Cs</li>


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
                                Customer Information
                            </h4>
                        </div>
                    </div>
	
                                        
                    <div class="_wrap form_block">

                        <div class="forms">
                            <form>
															
										<p class="normal gray_800">The following information helps us to make sure you’ve selected the right bike setup, and so we can tailor your handover experience.</p>												
												
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
                                    <!-- <legend>Inputs as descendents of labels (form legend)</legend> -->
                                    
                                    <div class="select_group">
                                        <div>
                                            <!-- Select -->
													<div class="select_query">What got you interested in an eBike/what do you want to use their eBike for*:</div>
											
													<?php
													
														foreach($meta_array['reasonForInterest']['picklistValues'] as $reason){
															$reason_label = $reason->label;
															$reason_value = addslashes($reason->value);
															print "<div class='outer_reason_label'>";
															print "<label class='reason_label'>";
															print "<input type=checkbox  class='reasonForInterest' value=\"$reason_value\" >";
															print "$reason_label";
															print "</label></div>";
														}
													
													?>
                                            
                                        </div>
                                    </div>
									
									
										<!-- CONFIDENT  -->
									    <div class="select_group">
                                        <div>
                                            <!-- Question -->
													<div class="select_query">How confident are you at riding a bike?</div>
													<!-- Answers -->
													<div class='outer_answer_label'>
													<?php
													
														foreach($meta_array['confidenceRidingABike']['picklistValues'] as $reason){
															$reason_label = $reason->label;
															$reason_value = addslashes($reason->value);
															print "<div class='outer_reason_label'>";
															print "<label class='reason_label'>";
															print "<input type=radio name='confidenceRidingABike'  class='confidenceRidingABike' value=\"$reason_value\" >";
															print "$reason_label";
															print "</label></div>";
														}
													
													?>
													</div>
												</div>
										</div>
										
										<!-- HEIGHT  -->
									    <div class="select_group">
                                        <div>
                                            <!-- Question -->
													<div class="select_query">Enter the rider's height</div>
													<!-- Answers -->
													<div class='outer_answer_label'>
														<div class="outer_reason_label">
															<label class="reason_label">
																<input type="radio" name="riderHeight" class="riderHeight" value="<5.1">Below 5.1</label>
															</div>
															<div class="outer_reason_label">
															<label class="reason_label">
																<input type="radio" name="riderHeight" class="riderHeight" value="<=6.5">Between 5.1 and 6.5</label>
															</div>
															<div class="outer_reason_label">
															<label class="reason_label">
																<input type="radio" name="riderHeight" class="riderHeight" value=">6.5">Above 6.5</label>
														</div>
													</div>
												</div>
										</div>
										
										
										
										
									

                                    <div class="select_group">
									
                                        <div class="_w50">
                                            <label>
                                                <!-- Select -->
                                                Are you planning on carrying passengers?
                                                <select onchange="carryChildren_change();"; id="carryChildren"  name="carryChildren"  >
                                                    <option value="Select" disabled selected hidden>Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </label>
                                        </div>									
									
									
									
												<!--          NUM OF CHILDREN                     -->
                                        <div class="_w50 numChildren_outer" style="display:none;">
                                            <label>
                                                <!-- Select -->
                                                Number of children:
                                                <select onchange="numChildren_change();"; id="numChildren"  name="numChildren"  >
                                                    <option value="Select" disabled selected hidden>Select</option>
															<option>0</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </label>
                                        </div>
										<!--        END NUM OF CHILDREN               -->
										
										
										

											<!--          AGE OF CHILDREN                     -->
                                        <div class="_w50 child_age" style="display:none">
                                            <label>
                                                <!-- Select -->
                                                Age of children:
                                                <input type="number" id="passenger1Age" name="passenger1Age" value="-">
														<input type="number" id="passenger2Age" name="passenger2Age" value="-">
                                            </label>
                                        </div> 
                                    </div>
											<!--          END AGE OF CHILDREN                     -->


                                    
									
										<!--          FIND OUT                                  -->
                                    <div class="select_group _w100">
                                        <span>Where did you find out about Lug+Carrie?</span>
                                    </div>
                                    <div class="select_wrap _w100 ">
                                        <div class="select _row left">
													<select name="whereDidYouHearAboutUs" id="whereDidYouHearAboutUs">
															<option value="Select" disabled selected hidden>Select</option>
															<option>Word of Mouth</option>
															<option>Facebook</option>
															<option>Instagram</option>
															<option>Google Search</option>
															<option>Media</option>
															<option>Ride and Stride</option>
															<option>City of Sydney</option>
															<option>Referral Program</option>
															<option>Unsure</option>
															<option>Other</option>
											   </select>										
                                        </div>
                                    </div>      <!--  OTHER  -->
                                    <div class="select_group _w100">
                                        <label>
                                            Describe Other
                                            <textarea  name="whereDidYouHearAboutUsOther" id="whereDidYouHearAboutUsOther" cols="30" rows="5" placeholder="Describe Other"></textarea>
                                        </label>
                                    </div>
										<!--  END  OTHER  -->
									
										<!--          END FIND OUT                                  -->
									
										<?php
										if($page_slug!="manual-checkout"){
											
											?>
										<!-- ID and Proof of Address  upload -->
                                    <h5>ID and Proof of Address</h5>                                    
                                    <span style="margin-bottom: 1rem;">
                                        Please upload either:<br>
                                        Copy of drivers licence front & back or Passport, and proof of address (e.g. bank statement, utitlity bill, etc.)
                                    </span>
                                    <div class="_wrap" style="margin-bottom: 2rem;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="upload_one" id="upload_one" onchange="primary_ImageUrl(1);">
                                                <span class="file-custom"></span>
                                            </label>
											<input type="hidden" name="primaryRiderIdentificationImageUrl" id="primaryRiderIdentificationImageUrl">
                                            <div class="error_msg">error message / required file types</div>
                                        </div>
                                    </div>
                                    <div class="_wrap upload_2_outer"  style="margin-bottom: 2rem; opacity: 0.35;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="upload_two" id="upload_two" onchange="primary_ImageUrl(2);">
                                                <span class="file-custom"></span>
                                            </label>
                                            <div class="error_msg ">error message / required file types</div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="primaryRiderIdentificationImageUrl2" id="primaryRiderIdentificationImageUrl2">									
									
										<!-- end  ID and Proof of Address  upload   -->
										<?php
										
										}
										
										?>
									
												<h5>Additional Rider</h5>         
												<p>Our bikes are great for sharing. Will you have a partner or someone else from your household who will also be riding the bike? We’ll collect their information here. </p>
                                        								
									
									
										<!--          ADDITIONAL RIDERS                 -->
                                    <div class="select_group _w100">
													<label>	
                                            <!-- Select -->
                                            Will there be additional riders of the eBike?

                                        </label>
                                    </div>
									<div class="select_group _w100">
									
                                            <select name="additionalRiders" id="additionalRiders"  onchange="add_riders_change_select();">
                                                <option value="Select" disabled selected hidden>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
									</div>
									
									
									<script>
									function add_riders_change_select(){
										var add_riders =  jQuery("#additionalRiders").val();
										if(add_riders=="Yes"){
											jQuery("input#additional_riders_checkbox").prop( "checked", true );
											
										} else {
											jQuery("input#additional_riders_checkbox").prop( "checked", false );
										}
										additional_riders_checkbox_function();
									}
									</script>
										<!--         END  ADDITIONAL RIDERS                 -->



										<!--      Additional riders      -->
                                    <div class="select_group">
                                        <label class="checkbox">                                                
                                            <input type="checkbox" style="display: none !important;" name="additional_riders_checkbox" id="additional_riders_checkbox" class="additional_riders_checkbox" onclick="additional_riders_checkbox_function();">

                                            <span>Additional riders details</span>
                                        </label>
                                    </div>
                                    <div class="additional_riders" style="display:none;">
												<label class="additional_riders_label">                                                
                                            <span>Additional Rider First Name</span>
													<input type=text name="additionalRiderFirstName" id="additionalRiderFirstName">
                                        </label>
									   
												<label class="additional_riders_label">                                                
                                            <span>Additional Rider Last Name</span>
													<input type=text name="additionalRiderLastName" id="additionalRiderLastName">
                                        </label>
										<div class="select_group">
                                        <label>
                                            <!-- Select -->
                                            Email                                            
                                            <input type="email" name="additionalRiderEmail" id="additionalRiderEmail" placeholder="Email address">
                                        </label>
                                    </div>
                                    <div class="select_group">
                                        <label>Street Address
                                            <input type="text"  name="additionalRiderAddress_street" id="additionalRiderAddress_street"  placeholder="Street Address">
                                        </label>
                                    </div>
                                    <div class="select_group">
                                        <label>Suburb
                                            <input type="text"   name="additionalRiderAddress_city" id="additionalRiderAddress_city"  placeholder="Suburb">
                                        </label>
                                    </div>

                                    <div class="select_group">
                                        <div class="_w50">
                                            <label>
                                                <!-- Select -->
                                                State:
                                                <select   name="additionalRiderAddress_state" id="additionalRiderAddress_state"  >
                                                    <option value="Select" disabled selected hidden>Select</option>
                                                    <option value="NSW">New South Wales</option>
															<option value="VIC">Victoria</option>
                                                </select>
                                            </label>
                                        </div>  
                                        
                                        <div class="select_group">
                                            <label>Postcode
                                                <input type="text" placeholder="Postcode"   name="additionalRiderAddress_postcode" id="additionalRiderAddress_postcode"  >
                                            </label>
                                        </div>
                                    </div>
                                    <h5>ID and Proof of Address</h5>                                    
                                    <!-- file upload -->
                                    <span style="margin-bottom: 1rem;">
                                        Please upload either:<br>
                                        Copy of drivers licence front & back or Passport, and proof of address (e.g. bank statement, utitlity bill, etc.)
                                    </span>
                                    <div class="_wrap" style="margin-bottom: 2rem;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file" aria-label="File browser example" name="upload_three" id="upload_three" onchange="primary_ImageUrl(3);">
                                                <span class="file-custom"></span>
                                            </label>
											<input type="hidden" name="additionalRiderIdentificationImageUrl" id="additionalRiderIdentificationImageUrl">
                                            <div class="error_msg">error message / required file types</div>
                                        </div>
                                    </div>
                                    <div class="_wrap upload_4_outer"  style="margin-bottom: 2rem; opacity: 0.35;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="upload_four" id="upload_four" onchange="primary_ImageUrl(4);">
                                                <span class="file-custom"></span>
                                            </label>
                                            <div class="error_msg ">error message / required file types</div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="additionalRiderIdentificationImageUrl2" id="additionalRiderIdentificationImageUrl2">
									</div><!-- end  attitional_riders  -->
										<!--      R     -->

									
									
									
                              
									
									

                                    <div class="select_group _w100">
                                        <label>
                                            Other notes
                                            <textarea id="otherNotes" name="otherNotes" cols="30" rows="5" placeholder="Please note any additional information that may be relevant."></textarea>
                                        </label>
                                    </div>

                                    <div class="button_wrap_right">
                                        <a  href="#stage_one" class="button naked_black goto goto_reset"  onclick="form_reset(1);" style="display:none;"  data-offset="80">reset</a>
												<a  href="#stage_one" class="button naked_black goto goto_back"  onclick="form_back(1);" style="display:block;"  data-offset="80">back</a>
                                        <a  href="#stage_three" class="button white_btn goto goto_next"  onclick="form_next(3);"  data-offset="80">Next</a>
                                    </div>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                                  

            </div>      
        </section>

        <!-- ************************************* -->
        <!-- STAGE THREE -->
        <!-- ************************************* -->

        <section  id="stage_3"  class="signup_intro centered " style="display:none">
            <!-- <div class=""> -->
            <div class="_row "> 
            
                <div class="column_100 progress_timeline_outer">
                    <div class="_wrap center">

                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Personal Info</li>
                                <li>Rider Info</li>
                                <li class="current">Insurance + Storage</li>
                                <li>Ts+Cs</li>

                            </ol>
                        </div>

                    </div>
                </div> 
            </div>   
            <div class="_row centered"> 
                <div class="column_50">                    
                    <div class="">
                        <div class="forms">                            
                            <form>
                                <fieldset>
										<!--    INSURANCE -->
                                    <div class="">
                                        <h4 class="blue">
                                            Insurance
                                        </h4>
                                        <p >All Lug+Carrie subscriptions include insurance that covers your bike and accessories for damage and theft, with a $500 excess.
</p><p>In some cases of misuse, insufficient locking, or storage that does not meet the terms and conditions, you may be responsible for the full cost of damage or theft. 
</p>
                                        <p >
                                            We encourage you to read the insurance section of the <a href="terms" target="_blank"> Terms and Conditions</a> to ensure you understand.
                                        </p>
                                    </div>
									<?php
									if($page_slug!="manual-checkout"){
									?>	
									<div class="_group">
										<label class="checkbox">
											<input type="checkbox" id="insuranceAgreement" name="insuranceAgreement">
											I have read, understand and acknowledge the Terms and Conditions related to the Lug + Carrie subscription insurance coverage.
										</label> 
									</div>
									<?php
									}
									?>
										<!--    END INSURANCE -->	

											<!--  STORAGE      -->
										<h4 class="blue">Bike Storage</h4>
										
										<p>The bike must be stored under cover, not visible from the street and always off street overnight. In your house is perfect, in the shed or garage are good too, as long as they are lockable. </p>

							<p>A parking garage or communal bike area are fine for storing the bike, but the area must not be accessible by the public and the bike must be locked up to something solid - yes bike rack, no chain link fence - when stored. </p>

							<p>All these details are important as they relate to our theft insurance. </p>

							<p>Where will you be storing yours? <br>
							Please provide some details below.</p>
                                    <div class="select_group">
									
									

									
									
									
                                        <label>
                                            <!-- Select -->
                                            Where will the bike be stored?                                           
                                            <!-- <textareacols="30" rows="5" placeholder="Describe storage"></textarea>
													-->
													
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="House or Apartment - Private and locked-up parking or garage or storeroom or balcony or dedicated bike storage" />House or Apartment - Private and locked-up parking or garage or storeroom or balcony or dedicated bike storage</label>
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="House or Apartment - Private open parking or garage or storeroom chained to a fence or building pipes" />House or Apartment - Private open parking or garage or storeroom chained to a fence or building pipes</label>
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="House or Apartment - Inside with easy access (ramp/elevator etc)" />House or Apartment - Inside with easy access (ramp/elevator etc)</label>
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="House or Apartment - Inside with access to be confirmed" />House or Apartment - Inside with access to be confirmed</label>
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="House or Apartment - Outside in a shed / protected area in backyard / rear courtyard / balcony" />House or Apartment - Outside in a shed / protected area in backyard / rear courtyard / balcony</label>
															<label class="radio"><input type=radio  name="bikeStorageLocation" id="bikeStorageLocation"  value="No sure / To be Confirmed / Other (please specify)" />No sure / To be Confirmed / Other (please specify)</label>
													</select>
                                        </label>
                                    </div>
                                    <div class="select_group _w100">
                                        <label>
                                            Other details.
                                            <textarea cols="30" rows="5"  name="bikeStorageLocationOther" id="bikeStorageLocationOther" >Additional details</textarea>
                                        </label>
                                    </div>									
									
									
                                    <div class="select_group _w100">
                                        <label>
                                            Additional details of where the eBike will be stored.
                                            <textarea cols="30" rows="5"  name="bikeStorageAdditionalDetails" id="bikeStorageAdditionalDetails" >Additional details</textarea>
                                        </label>
                                    </div>
                                    <div class="select_group">
                                        <label>Street Address
                                            <input type="text" placeholder="Suburb" id="bikeStorageAddress_street" name="bikeStorageAddress_street">
                                        </label>
                                    </div>
									
                                    <div class="select_group">
                                        <label>Suburb
                                            <input type="text" placeholder="Suburb" id="bikeStorageAddress_Suburb" name="bikeStorageAddress_Suburb">
                                        </label>
                                    </div>

                                    <div class="select_group">
                                        <div class="_w50">
                                            <label>
                                                <!-- Select -->
                                                State:
                                                <select name="bikeStorageAddress_State" id="bikeStorageAddress_State">
                                                    <option value="Select" disabled selected hidden>Select</option>
                                                    <option value="VIC">Victoria</option>
                                                    <option value="NSW">New South Wales</option>
                                                </select>
                                            </label>
                                        </div>  
                                        
                                        <div class="select_group" >
                                            <label>Postcode
                                                <input type="text" placeholder="Postcode" name="bikeStorageAddress_Postcode" id="bikeStorageAddress_Postcode">
                                            </label>
                                        </div>

                                    </div>
										<!-- END STORAGE                    -->

										<!-- file upload -->
                                    <h5>Bike Storage Images</h5>                                    
                                    <span style="margin-bottom: 2rem;">
                                        Please upload photos of where you will store the bike.
                                    </span>
                                    <div class="_wrap" style="margin-bottom: 2rem;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Image</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="filebikeStorageImageURLs1" id="filebikeStorageImageURLs1" onchange="primary_ImageUrl('storage1');">
                                                <span class="file-custom"></span>
                                            </label>
											<input type="hidden" name="bikeStorageImageURLs1" id="bikeStorageImageURLs1">
                                            <div class="error_msg">error message / required file types</div>
                                        </div>
                                    </div>
                                    <div class="_wrap" style="margin-bottom: 2rem;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Image</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="filebikeStorageImageURLs2" id="filebikeStorageImageURLs2" onchange="primary_ImageUrl('storage2');">
                                                <span class="file-custom"></span>
                                            </label>
											<input type="hidden" name="bikeStorageImageURLs2" id="bikeStorageImageURLs2">
                                            <div class="error_msg">error message / required file types</div>
                                        </div>
                                    </div>
										<!-- end file upload -->


                                    <div class="button_wrap_right">
                                        <a  href="#stage_two"  onclick="form_back(2);" class="button naked_black goto"  data-offset="80">back</a>
                                        <a  href="#stage_four"  onclick="form_next(4);" class="button white_btn goto"  data-offset="80">Next</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                                  
            </div>      
        </section>

        <!-- ************************************* -->
        <!-- STAGE Four -->
        <!-- ************************************* -->

        <section id="stage_4" class="signup_intro centered " style="display:none">
            <!-- <div class=""> -->
            <div class="_row "> 
            
                <div class="column_100 progress_timeline_outer">
                    <div class="_wrap center">

                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Stage One</li>
                                <li>Stage Two</li>
                                <li >Stage Three</li>
                                <li class="current">Stage Four</li>
                                <li>Stage Five</li>
                                <li >Stage Six</li>
                            </ol>
                        </div>

                    </div>
                </div> 
            </div>   
            <div class="_row centered"> 
                
                <div class="column_50">                    
        
                    <div class="">
                        
                        <div class="forms">                            
                            <form>
                                <fieldset>
                                    <div class="">
                                        <h4 class="blue">
                                            Terms and Conditions
                                        </h4>
                                        <p >
                                            We like to be open and honest about the terms of our subscription. Before moving on to the next step, please have a read of the Terms and Conditions, to make sure you understand important information related to your bike, payments, repairs, swapping, storage, and fees.  
                                        </p>                                       
                                        <p >
                                            You can find them <a href="terms" target="_blank"> here</a>.
                                        </p>
                                    </div>
                                                                    

                                    <div class="_group">
                                        <label class="checkbox">
                                            <input type="checkbox" id="storageLockingAcknowledgement"  value="true" name="storageLockingAcknowledgement">
                                            I have read, understand and acknowledge the Terms and Conditions related to the Lug + Carrie subscription.
                                        </label> 
                                    </div>

                                    <div class="button_wrap_right">
                                        <a  href="#stage_three"  onclick="form_back(3);" class="button naked_black goto"  data-offset="80">back</a>
                                        <a  href="#stage_five"  onclick="form_next(5);" class="button white_btn goto"  data-offset="80">Submit your application!</a>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                                  
            </div>      
        </section>
        
        

        <!-- ************************************* -->
        <!-- STAGE Five -->
        <!-- ************************************* -->

        <section id="stage_5" class="signup_intro centered " style="display:none">
            <!-- <div class=""> -->
            <div class="_row "> 
            
                <div class="column_100 progress_timeline_outer">
                    <div class="_wrap center">
							<?php
							
							
							if($page_slug=="manual-checkout"){
								?>
								<div class="progress_timeline">
                            <ol class="progress_list">
                                <li  class="current">Stage One</li>
                                <li >Stage Two</li>
                            </ol>
                        </div>
							<?php
								
							} else {
								?>
								<div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Personal Info</li>
                                <li >Rider Info</li>
                                <li >Insurance + Storage</li>
                                <li >Ts+Cs</li>              
                            </ol>
                        </div>
							<?php
							}
							?>
                    </div>
                </div> 
            </div>   
            <div class="_row ">                 
                <div class="column_100">                    
                    <div class="_wrap">
                        <div class="text_block center">

                        </div>
                    </div>
                    <div class="_wrap form_block">
                        <div class="forms">
                            <form>
                                <fieldset> 
                                    <!-- <legend>Inputs as descendents of labels (form legend)</legend> -->
                                    
									
																

													<div class="_wrap center">
														<div class="text_block center">
															<h4 class="blue">Thanks for your application!</h4>
														</div>
													</div>

           
													<div class="_wrap center">
														<div class="text_block">			   
															<p>We will review your application within 24-hours.</p>

															<p>Once approved, you’ll 
															<ol>
																<li>Provide a $44 holding deposit.</li>
																<li>Book a delivery date</li>
																<li>Enjoy a 45-minute handover experience and orientation.</li>
																<li>Ride off into the sunset!</li>
															</ol>
															</p>
															<p>Keep your eyes open for an email from us!</p>
														</div>
													</div>


										
                                    

                                    <!-- <div class="button_wrap_right">
                                        <a href="#stage_four"  onclick="form_back(4);" class="button naked_black"  data-offset="80">back</a>
                                        <a href="#stage_six"  onclick="form_next(6);"  class="button white_btn"  data-offset="80">Next</a>
                                      </div> -->
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                                  

            </div>      
        </section>

        <!-- ************************************* -->
        <!-- STAGE SIX -->
        <!-- ************************************* -->

        <section id="stage_6" class="signup_intro centered " style="display:none">
            <!-- <div class=""> -->
            <div class="_row "> 
            
                <div class="column_100 progress_timeline_outer">
                    <div class="_wrap center">
							<?php
							if($page_slug=="manual-checkout"){
								?>
								<div class="progress_timeline">
                            <ol class="progress_list">
                                <li class="current">Stage One</li>
                                <li>Stage Two</li>
                            </ol>
                        </div>
							<?php
								
							} else {
							?>
                        <div class="progress_timeline">
                            <ol class="progress_list">
                                <li >Stage One</li>
                                <li >Stage Two</li>
                                <li >Stage Three</li>
                                <li>Stage Four</li>
                                <li>Stage Five</li>

                            </ol>
                        </div>
							<?php
							}
							?>
                    </div>
                </div> 
            </div>   
            <div class="_row ">                 
                <div class="column_100">                    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h4 class="blue">
                                Customer Identification Information
                            </h4>
                        </div>
                    </div>
                    <div class="_wrap form_block">
                        <div class="forms">
                            <form>
                                <fieldset> 
                                    <!-- <legend>Inputs as descendents of labels (form legend)</legend> -->

                                    <div class="select_group">
                                        <label>
                                            <!-- Select -->
                                            <!-- Select -->
                                            Email                                            
                                            <input class="email_input" type="email" id="email" placeholder="Email address">
													<div class="error_msg red email_input_error" style="display:none;">You must enter an email address</div>
                                        </label>
                                    </div>
									
									
                                    <div class="select_group">
                                        <div><label>
                                            <!-- Select -->
                                            <!-- Select -->
                                            <span>Date of Birth </span>   
													<div>
													<span style="display:block;  float:left; max-width:110px;"><input class="date_of_birth_d" required   style="max-width:70px; float: left;" min="1" max="31" type="number" id="date_of_birth_d" placeholder="DD" maxlength=2>/</span>
													<span style="display:block;  max-width:110px; float:left"><input class="date_of_birth_m"  required style="max-width:70px;  float:left" min="1" max="12" type="number" id="date_of_birth_m" placeholder="MM" maxlength=2>/</span>
                                            <span style="display:block; max-width:160px;  float:left"><input class="date_of_birth_y" required  style="max-width:140px;  float:left" min="1900" max="2022" type="number" id="date_of_birth_y" placeholder="YYYY" maxlength=4></span>
													<span style="clear:both"></span>
													</div>
													<div class="error_msg red dob_error" style="display:none;">You must enter a valid date</div>
                                        </label></div>
                                    </div>
									
									
									
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
                                        <div class="_w50">
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
                                        
                                        <div class="select_group">
                                            <label>Postcode
                                                <input type="text" placeholder="Postcode"   name="primaryRiderAddress_postcode" id="primaryRiderAddress_postcode"  >
                                            </label>
                                        </div>

                                    </div>

                                   
									<?php
									if($page_slug=="manual-checkout"){
									
									?>
										<!-- ID and Proof of Address  upload -->
                                    <h5>ID and Proof of Address</h5>                                    
                                    <span style="margin-bottom: 1rem;">
                                        Please upload either:<br>
                                        Copy of drivers licence front & back or Passport, and proof of address (e.g. bank statement, utitlity bill, etc.)
                                    </span>
                                    <div class="_wrap" style="margin-bottom: 2rem;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="upload_one" id="upload_one" onchange="primary_ImageUrl(1);">
                                                <span class="file-custom"></span>
                                            </label>
											<input type="hidden" name="primaryRiderIdentificationImageUrl" id="primaryRiderIdentificationImageUrl">
                                            <div class="error_msg">error message / required file types</div>
                                        </div>
                                    </div>
                                    <div class="_wrap upload_2_outer"  style="margin-bottom: 2rem; opacity: 0.35;">
                                        <span style="margin-bottom: 0.25rem;">Upload your Identification</span>
                                        <div class="assets_outer">
                                            
                                            <label class="file" style="margin-bottom: 0.5rem;">
                                                <input type="file"  aria-label="File browser example" name="upload_two" id="upload_two" onchange="primary_ImageUrl(2);">
                                                <span class="file-custom"></span>
                                            </label>
                                            <div class="error_msg ">error message / required file types</div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="primaryRiderIdentificationImageUrl2" id="primaryRiderIdentificationImageUrl2">									
									
										<!-- end  ID and Proof of Address  upload   -->
										
										
										<p >
											We encourage you to read the insurance section of the <a href="terms" target="_blank"> Terms and Conditions</a> to ensure you understand.
										</p>
										<div class="_group">
											<label class="checkbox">
												<input type="checkbox" id="insuranceAgreement" name="insuranceAgreement">
												I have read, understand and acknowledge the Terms and Conditions related to the Lug + Carrie subscription insurance coverage.
											</label> 
										</div>
										
										
										<?php
									}
										
									?>	
										
                                    </div>									

                                    <!-- repeat / make visible if above = checked -->

                                    <div class="button_wrap_right">
                                        <a href="#stage_five"  onclick="form_back(5);"  class="button naked_black goto" data-offset="80">back</a>
                                        <a href="#stage_success"  onclick="form_next(7);" class="button white_btn goto" data-offset="80">Next</a>
                                      </div>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                                  

            </div>      
        </section>


        <section id="stage_7" class="signup_intro centered " style="display:none">
<div class="_wrap center">
														<div class="text_block center">
															<h4 class="blue">Thank You!</h4>
														</div>
													</div>

           
													<div class="_wrap center">
														<div class="text_block">			   
															<p>Your details have been successfully submitted. Next you'll be asked to provide a $44 holding deposit.</p>
														</div>
													</div>
			
		</section>
        </main>
<!--  end of template -->


<script>
// to do move this to proper js file 
function form_next(x){
	waiting_for_response();
	$verified =1;
	var storageLockingAcknowledgement = false;
	var insuranceAgreement = false;	
	var $data=new Array();
	// form 1
	$data['uuid']=jQuery("input#uuid").val();
	$data['email']=jQuery("input#email").val();
	if($data['email']==""){
		$data['email']=jQuery("input.email_input").val();
	}
	
	

	
	$data['firstName']=jQuery("#firstName").val();
	$data['lastName']=jQuery("#lastName").val();
	$data['phone']=jQuery("#phone").val();
	$data['postcode']=jQuery("input[type=number]#postcode").val();
	// form 2
	$data['firstName']=jQuery("#firstName").val();
	//$salutation=jQuery("#salutation").val();
	
	if(x==2){
		// do some verifications here?
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
	} else if(x==3){
		
		if(($data['firstName']=="")){
			// firstName is empty
			$verified=0;
			// show message
			jQuery("input#firstName").next().addClass('visible');
		} else {
			jQuery("input#firstName").next().removeClass('visible');
		}
		
	} else if(x==4 || x==5) {

		// is consent checkbox checked? 
		if(jQuery("input#insuranceAgreement").is(":checked")) {
			console.log("insuranceAgreement is checked");
			insuranceAgreement=true;
		} else {
			console.log("insuranceAgreement is not checked");
			insuranceAgreement=false;
			if(x==4){
				$verified=0;
			}
		}

		// is consent checkbox checked? 
		if(jQuery("input#storageLockingAcknowledgement").is(":checked")) {
			console.log("storageLockingAcknowledgement is checked");
			storageLockingAcknowledgement=true;
		} else {
			console.log("storageLockingAcknowledgement is not checked");
			storageLockingAcknowledgement=false;
			if(x==5){
				$verified=0;
			}
		}		
		
		
	} else if(x==6){
		
	

	} else if(x==7){	
		//date_of_birth_d
		$yy=jQuery("input#date_of_birth_y").val();
		$mm=jQuery("input#date_of_birth_m").val();
		$dd=jQuery("input#date_of_birth_d").val();
		$em=jQuery("input.email_input").val();
		
		if($em==""){
			$verified=0;
			jQuery(".email_input_error").show();
		}
		
		if($yy=="" || $dd=="" || $mm==""){
			$verified=0;
			jQuery(".dob_error").show();
		} else {
			jQuery(".dob_error").hide();
		}


		
	} else {
		
		
	}
	// API Stuff
	//

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
				type: 'order',
				uuid: $data['uuid'],
				email: $data['email'],
				firstName: $data['firstName'],
				lastName: $data['lastName'],
				phone: $data['phone'],
				postcode: $data['postcode'],
				products: products
			};		


			data['pagenum']=x;
			
			$yy=jQuery("input#date_of_birth_y").val();
			$mm=jQuery("input#date_of_birth_m").val();
			$dd=jQuery("input#date_of_birth_d").val();
			if($yy!="" && $mm!="" && $dd!=""){
				//"primaryRiderDOB" : "2000-12-31",
				data['primaryRiderDOB']=$yy+"-"+$mm+"-"+$dd;
			}
			
								
			
				
			if(x==2){
				data['orderStage']="Stage One";
			}
			if(x==3 || x==4 || x==5){
				data['orderStage']="Stage Two";
				data['whereDidYouHearAboutUs']=jQuery("#whereDidYouHearAboutUs").val();
				data['whereDidYouHearAboutUsOther']=jQuery("#whereDidYouHearAboutUsOther").val();
				data['reasonForInterest']=Array();
				//data['reasonForInterest']=jQuery("input[name=reasonForInterest]:checked").val();
				jQuery('input[class=reasonForInterest]:checked').each(function () {
					var $u = jQuery(this).val();
					data['reasonForInterest'].push($u);
				});
				
				data['riderHeight']=jQuery('input[name="riderHeight"]:checked').val();
				data['confidenceRidingABike']=jQuery('input[name="confidenceRidingABike"]:checked').val();
				
				data['primaryRiderIdentificationImageUrls']=Array();
				var $up1=jQuery("#primaryRiderIdentificationImageUrl").val();
				if($up1!=""){
					data['primaryRiderIdentificationImageUrls'].push($up1);
				}
				var $up2=jQuery("#primaryRiderIdentificationImageUrl2").val();
				if($up2!=""){
					data['primaryRiderIdentificationImageUrls'].push($up2);
				}					
				
				
				
				data['additionalRiders']=jQuery("#additionalRiders").val();
		//
				data['additionalRiderFirstName']=jQuery("#additionalRiderFirstName").val();
				data['additionalRiderLastName']=jQuery("#additionalRiderLastName").val();
				data['additionalRiderEmail']=jQuery("#additionalRiderEmail").val();				
				data['additionalRiderAddress_street']=jQuery("#additionalRiderAddress_street").val();
				data['additionalRiderAddress_city']=jQuery("#additionalRiderAddress_city").val();
				data['additionalRiderAddress_state']=jQuery("#additionalRiderAddress_state").val();
				data['additionalRiderAddress_postcode']=jQuery("#additionalRiderAddress_postcode").val();				
				data['additionalRiderIdentificationImageUrls']=Array();
				var $up3=jQuery("#additionalRiderIdentificationImageUrl").val();
				if($up3!=""){
					data['additionalRiderIdentificationImageUrls'].push($up3);
				}
				var $up4=jQuery("#additionalRiderIdentificationImageUr2").val();
				if($up4!=""){
					data['additionalRiderIdentificationImageUrls'].push($up4);
				}
				data['passenger1Age']=jQuery("#passenger1Age").val();
				data['passenger2Age']=jQuery("#passenger2Age").val();
				data['otherNotes']=jQuery("#otherNotes").val();
				data['insuranceAgreement']=insuranceAgreement;
				data['storageLockingAcknowledgement']=storageLockingAcknowledgement;
				
				data['bikeStorageLocation']=jQuery("input[name=bikeStorageLocation]:checked").val();
				data['bikeStorageLocationOther']=jQuery("#bikeStorageLocationOther").val();
				data['bikeStorageAdditionalDetails']=jQuery("#bikeStorageAdditionalDetails").val();
				data['bikeStorageAddress_Suburb']=jQuery("#bikeStorageAddress_Suburb").val();
				data['bikeStorageAddress_street']=jQuery("#bikeStorageAddress_street").val();
				data['bikeStorageAddress_State']=jQuery("#bikeStorageAddress_State").val();
				data['bikeStorageAddress_Postcode']=jQuery("#bikeStorageAddress_Postcode").val();
				data['bikeStorageImageURLs']=Array();
				var $up1=jQuery("#bikeStorageImageURLs1").val();
				if($up1!=""){
					data['bikeStorageImageURLs'].push($up1);
				}
				var $up2=jQuery("#bikeStorageImageURLs2").val();
				if($up2!=""){
					data['bikeStorageImageURLs'].push($up2);
				}							
				
				
				
				console.log(data);
			}
			if(x==6){

				data['orderStage']="Stage Three";
							
				
			}	
			if(x==7){
				data['orderStage']="Stage Four";
				
				data['primaryRiderAddress_street']=jQuery("#primaryRiderAddress_street").val();
				data['primaryRiderAddress_city']=jQuery("#primaryRiderAddress_city").val();
				data['primaryRiderAddress_state']=jQuery("#primaryRiderAddress_state").val();
				data['primaryRiderAddress_postcode']=jQuery("#primaryRiderAddress_postcode").val();

				data['primaryRiderIdentificationImageUrls']=Array();
				var $up1=jQuery("#primaryRiderIdentificationImageUrl").val();
				if($up1!=""){
					data['primaryRiderIdentificationImageUrls'].push($up1);
				}
				var $up2=jQuery("#primaryRiderIdentificationImageUrl2").val();
				if($up2!=""){
					data['primaryRiderIdentificationImageUrls'].push($up2);
				}	

				
			}

            jQuery.post('/wp-admin/admin-ajax.php' , data, function(response) {
                response_received();
				if(response != "0") {
                    // response is good 
					console.log("1)) post_booking : " +response);
					// get the uuid and put in hidden field
					jQuery("#uuid").val(response);
					// if response is a URL?
					var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
					var is_url= regexp.test(response);
					
					
					if(is_url){
						//window.location.href = response;
						// wiat 5 secs and then redirect to new url 
						setTimeout(function(){
							window.location.href = response;
						},5000);						
						
						
					}
					
					form_back(x);
                
				} else {
                    // response is 0, error 
					alert('There was an error and we could not capture your details .' + response);
					console.log("2)) post_booking :    " + response);
					response_received();
					//form_back(x);
                }

            });


			return false;
	} else {
		response_received();
		console.log("form not complete and verified");
	}
	
	
	
	

}
function  form_back(x){
	//hide all sections
	jQuery("section.signup_intro").hide();
	// show "x" section 
	jQuery("section#stage_" + x).show();
}

function carryChildren_change(){
	var n = jQuery("#carryChildren").val();
	if(n=="Yes"){
		jQuery(".numChildren_outer").show();
		jQuery(".child_age").show();
	} else {
		jQuery(".numChildren_outer").hide();
		jQuery(".child_age").hide();
		jQuery("#numChildren").val(0);
		jQuery("#passenger1Age").val('');
		jQuery("#passenger2Age").val('');
	}
}

function numChildren_change(){
	var n = jQuery("#numChildren").val();
	if(n==1){
		jQuery("#passenger1Age").prop('disabled', false);
		jQuery("#passenger2Age").prop('disabled', true);
		jQuery("#passenger2Age").val('');
	}
	if(n==2){
		jQuery("#passenger1Age").prop('disabled', false);
		jQuery("#passenger2Age").prop('disabled', false);
	}
	if(n==0){
		jQuery("#passenger1Age").prop('disabled', true);
		jQuery("#passenger2Age").prop('disabled', true);
		jQuery("#passenger1Age").val('');	
		jQuery("#passenger2Age").val('');		
		
	}
}



</script>


<?php
get_footer();