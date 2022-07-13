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
                            
                        </div>
                    </div>

                </div>
            </div>
            
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

                                } else if($book_type=="email-design") {
                                
                                ?>	
                                    <h4 class="blue">Enjoy!</h4>
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
										<h5>Pick a date and time</h5>
										
									<?php

									} else if($book_type=="email-design") {
                                    
                                    ?>																				
                                        <p>An email with the details of your very own build is headed your way.</p>
                                        <p>What you do with it - tweak it, share it, or just admire it - is up to you!</p>                                        
                                    <?php

									} else {
									
                                    ?>
										<h5>Pick a date and time</h5>
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