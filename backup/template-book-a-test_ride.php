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

	<section class="hero bg_cover centered small_bg" style="display:none;">

            <div class="_row">        
                <div class="column_60 ">

                    <div class="_wrap">
                        <div class="text_block center">
                           <h1>&nbsp;</h1>
                            <div class="large _regular">
                            </div>
                            <div class="button_wrap_center">
                            <!-- 
                            <div class="play_button" id="playBtn" onclick="videoControl()"  >
                                <svg class="play" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                <path class="circle" d="M26.584 53.168C41.266 53.168 53.168 41.2676 53.168 26.584C53.168 11.9023 41.266 0 26.584 0C11.902 0 0 11.9023 0 26.584C0 41.2676 11.902 53.168 26.584 53.168Z" fill="#00C1DC"/>
                                <path class="arrow"  d="M36.1075 26.9304L21.2863 35.167C21.1149 35.2637 20.9684 35.2749 20.8453 35.2004C20.7228 35.126 20.6613 34.9922 20.6613 34.7988V18.3701C20.6613 18.1768 20.7228 18.0427 20.8453 17.9683C20.9684 17.8941 21.1149 17.9053 21.2863 18.002L36.1075 26.2385C36.2789 26.3352 36.3644 26.4504 36.3644 26.5845C36.3644 26.7183 36.2789 26.8337 36.1075 26.9304V26.9304Z" fill="white"/>
                                </g>                    
                                </svg>                    
                            </div>

                            <div class="" id="buttonText">Play Video</div>
                            -->
                            </div>            
                        </div>
                    </div>

                </div>
            </div>
            <div class="_row _bottom _center">
                <div class="page_down_wrap">
                    <!-- <svg class="chev_down" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
                        <g >
                            <path d="M19.3647 38.73C8.68701 38.73 0 30.0435 0 19.3665C0 8.68774 8.68701 0 19.3647 0C30.0425 0 38.73 8.68774 38.73 19.3665C38.73 30.0435 30.0425 38.73 19.3647 38.73V38.73ZM19.3647 1.51221C9.52051 1.51221 1.51172 9.52148 1.51172 19.3665C1.51172 29.2097 9.52051 37.2178 19.3647 37.2178C29.209 37.2178 37.2183 29.2097 37.2183 19.3665C37.2183 9.52148 29.2095 1.51221 19.3647 1.51221Z" fill="#EBEAFA"/>
                            <path d="M25.6243 19.0068L19.9003 24.7305C19.8266 24.8047 19.7161 24.8535 19.6178 24.8535C19.5195 24.8535 19.409 24.8047 19.3353 24.7305L13.6113 19.0068C13.5375 18.9326 13.4884 18.8223 13.4884 18.7236C13.4884 18.626 13.5375 18.5156 13.6113 18.4414L14.2254 17.8271C14.2991 17.7539 14.3974 17.7051 14.5079 17.7051C14.6062 17.7051 14.7167 17.7539 14.7905 17.8271L19.6178 22.6553L24.4451 17.8271C24.5189 17.7539 24.6294 17.7051 24.7277 17.7051C24.8259 17.7051 24.9365 17.7539 25.0102 17.8271L25.6243 18.4414C25.6981 18.5156 25.7472 18.626 25.7472 18.7236C25.7472 18.8223 25.6981 18.9326 25.6243 19.0068V19.0068Z" fill="#EDEDED"/>
                        </g>                  
                    </svg>                  
                </div>
            </div>

        <!-- </div> -->
        </section>	

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
									<?php
									if( $contact_type=="Consultation" || $book_type=="consultation" || $contact_type=="TestRide"){
									?>
                                <li onclick="form_back(1);">Contact Info</li>
                                <li class="current">Booking</li>	

								<?php 
								} else {							
								?>
							
                               <!-- <li >Stage One</li>
                                <li class="current">Stage Two</li> -->
								<?php
								}
								?>

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
									} else if($book_type=="email-design") {
										print "<p class='email_response'></p>";
									
									} else {
									?>
										<h5>Pick a date & time</h5>

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
            <!-- <div class="_row "> 
                <div class="column_100 ">
                    <div class="_wrap center">
                        <div class="progress_timeline">
                            <ol class="progress_list">
                               <li >Stage One</li>
                                <li>Stage Two</li>
                                <li class="current">Stage Three</li>

                            </ol>
                        </div>
                    </div>
                </div> 
            </div> -->
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
									
                                <p style="display:none;">Your appointment ID is <strong><span id="appointment_id"></span></strong></p>
                                <p>Location: <strong><span id="appointment_location"></span></strong></p>
                                <p>Date: <strong><span id="appointment_date"></span></strong></p>
                                <p>Start Time: <strong><span id="appointment_start_time"></span></strong></p>
                                <p>End Time: <strong><span id="appointment_end_time"></span></strong></p>
																		
								</div>
                                
                                <?php
									if($book_type=="testride"){
									?>	  
										<h5>Your test ride is booked!</h5>
										<p>Look out for an email from us confirming the date and time.  </p>
										<p>Need to cancel or reschedule? It happens. Send an email to <a href="mailto:info@lug-carrie.com">info@lug-carrie.com</a> and we’ll help you out.
										<p>We’re looking forward to your ride!</p>
										
									<?php
									} else {
									?>
										<h5>Your consultation has been booked. </h5>
										<p>Look out for an email from us confirming the date and time.  </p>
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
function  form_back(x){
	//hide all sections
	jQuery("section.signup_intro").hide();
	// show "x" section 
	jQuery("section#stage_" + x).show();
}

</script>






<?php
get_footer();