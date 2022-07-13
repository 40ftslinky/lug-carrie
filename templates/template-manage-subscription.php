<?php
/**
 * The template for displaying the about page.
 *
 * Template name: Manage-subscription Page
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>
<!-- Begin template -->
    <main>
	<section class="about_sect centered ">
            <!-- <div class=""> --> 
            <div class="_row ">             
                <div class="column_60">

                    <div class="_wrap">

                        <div class="_group">
                            <div class="_intro">
                                
                                <!--  -->
                                <div class="forms">
                                    <h3 class="navy">
                                        Manage Subscription
                                    </h3>
										<?php
										//////////////////////////////////////////////////////
										// STEP ONE : FORM 
										////////////////////////////////////////////////////
										if(empty($_POST['email']) && empty($_POST['two-factor-code'])  && empty($_GET['email']) && empty($_GET['code'])){
											?>
											<form method="post" action="/manage-subscription">
													<p>Please enter your email address and click the submit button:</p>
													<div class="select_group">
                                                        <input type="email" name="email" id="email" class="email-input">
                                                    </div>
													<div class="button_wrap_right">
                                                        <input class="button blue_btn" type=submit value="Submit">
                                                    </div>
											</form>
											<?php
										}
										/////////////////////////////////////////////////////////
										// STEP TWO 
										// 2FA SEND
										////////////////////////////////////////////////////////
										if(!empty($_POST['email']) && !isset($_POST['two-factor-code'])  && (empty($_GET['email']) && empty($_GET['code']))){
												// create a 7 digit number 
												$code = rand(1111111,9999999);
												$date_created=time();
												$date_expire=strtotime("+ 1 hour");
												// store the code , date and email address 
												
												global $wpdb;
												
												$insert_values=array(
													'code' => $code,
													'email' => $_POST['email'],
													'date_created' =>$date_created,
													'date_expire' => $date_expire,
												);
												
												$wpdb->insert('wp_auth_2fa', $insert_values);	// insert to DB 
												
												// send the email code
												$to = $_POST['email'];
												$subject="Your Authentication Code From Lug & Carrie";
												$message="Your code is: <br><p><b>$code</b></p><p><a href='https://".$_SERVER['SERVER_NAME']."/manage-subscription?email=".$to."&code=".$code."'>Click here</a></p>";
												
												$send = wp_mail($to, $subject,$message);	// send the message...
											?>
											<p>We have sent an authentication code to the following email address <b><?php echo $_POST['email'] ?></b>.</p>
												<p>Please check your email address and enter the 7 character code into the following text field.</p>
												<form method="post" action="/manage-subscription">
                                                    <div class="select_group">
                                                        <input type=hidden name='email' id='email' value="<?php echo $_POST['email']; ?>">
                                                    </div>
                                                    <div class="select_group">
                                                        <input type=number name="two-factor-code" id="two-factor-code" class="two-factor-code">
                                                    </div>
                                                    <div class="button_wrap_right">
                                                        <input class="button blue_btn" type=submit value="Submit">
                                                    </div>
												</form>
										<?php
										}
										/////////////////////////////////////////////////////////
										// STEP THREE 
										// 2FA SEND
										////////////////////////////////////////////////////////
										if(!empty($_POST['two-factor-code'])  || (!empty($_GET['email']) && !empty($_GET['code']) )){
											if(!empty($_POST['two-factor-code'])){
												$code = $_POST['two-factor-code'];
												$email = $_POST['email'];
											}
											if(!empty($_GET['email']) && !empty($_GET['code'])){
												$code = $_GET['code'];
												$email = $_GET['email'];
											}
											// check DB 
											$now_time= time();
											global $wpdb;
											$query = "SELECT * FROM `wp_auth_2fa` WHERE `code` = '$code' and `email`='$email'";
											
											$database_row = $wpdb->get_row( $query );
											
											$date_expire=$database_row->date_expire;
											if(empty($date_expire)){
												?>
												<p>Error: There was a problem with your code. Please try again:</p>
												<form method="post" action="/manage-subscription">
												<p><input type=hidden name='email' id='email' value="<?php echo $email; ?>">
												<input type=number name="two-factor-code" id="two-factor-code" class="two-factor-code"></p>
												<input type=submit value="Submit">
												</form>												
												<?php
											} else if($date_expire<=$now_time){
												// Codes expire after one hour , 
												print "<p>Your code has expired.</p><p>Please <a href='/manage-subscription'>click here to resend your code.</a></p>";
											} else {
												//Code has not expired 
												//TODO API LookUp for Portal address.
												//data
												?>
												<script>
												jQuery(document).ready( function($){
												
													waiting_for_response();
													//form_data = new FormData();
														var data = {
															action: 'post_booking'
														}

													$email="<?php echo $email; ?>";

													data['email']=$email;
													data['type']="portal";
											
												
												            jQuery.post('/wp-admin/admin-ajax.php' , data, function(response) {
																response_received();
																if(response != "0") {
																	// response is good 
																	//PortalURL:
																	if (response.indexOf("PortalURL:") >= 0){
																		var portal_url =response.replace('PortalURL:','');
																		console.log("1)) post_booking : " +response);
																		console.log("1)) portal_url : " +portal_url);
																		// redrect to portal_url 
																		window.location.href = portal_url;
																	} else if (response.indexOf("Error:") >= 0) {
																		response =response.replace('Error:','');
																		jQuery("#return_message").html(response);
																	}
																	
																} else {
																	console.log("2)) error : " +response);
																	jQuery("#return_message").html("Error: Something has gone wrong.");
																}
															});
												
												});
												</script>
												<div id="return_message"></div>
												<form>	
													<input type=hidden name='stripeURL' id='stripeURL'>
												</form>
												<?php
											}
									
										}
									?>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                



        </section>




	</main>
<!--  end of template -->
<?php
get_footer();