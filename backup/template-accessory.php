<?php
/**fu
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Accessory - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];




	get_header(); 
	


?>


<main>        

		<?php
		
		
		include "template-accessory-part.php";
		
		
		?>

        <!-- needs to be carousel - populated from accessories page content -->
        <section class="accessories centered yellow_bg">
            <!-- <div class=""> -->
            <div class="_row ">             
                
                <div class="column_100">
                <div class="_wrap">
                    <div class="text_block center">
                    <h2 class="navy">Often used with:</h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="_row _max_width_1600 three_col">             
                
                <div class="column_third ">
                <div class="img_wrap">
						<a href="/accessory/?id=01t5g000003NtmbAAC">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/cargo_hold_37_panniers.jpg" loading="lazy"/>
						</a>
                </div>
    
                <div class="_group">
                    <div class="text_block left">
                    <h6 class="navy">$3 PER WEEK</h6>
                    <h5 class="navy">Cargo Hold 37 Panniers</h5>
                    <!-- <div class="large _regular"> -->
                        <p class="normal">                   
                        The Bike-Trunk: The Cargo Hold Panniers are like a trunk for your bike.                   
                        </p>                  
                    <!-- </div> -->                         
                    </div>
                </div>
    
                </div>
    
                <div class="column_third ">
                <div class="img_wrap">
						<a href="/accessory/?id=01t5g000003NtmaAAC">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/sidekick_seat_pad.jpg" loading="lazy" />
						</a>
                </div>
    
                <div class="_group ">
                    <div class="text_block left ">
                    <h6 class="navy">$2 PER WEEK</h6>
                    <h5 class="navy">Sidekick Seat Pad</h5>
                    <!-- <div class="large _regular"> -->
                    <p class="normal">                   
                        Foam cushion provides comfort for passengers. 
                    </p>                  
                    <!-- </div> -->                        
                    </div>
                </div>
    
                </div>
    
                <div class="column_third ">
                <div class="img_wrap">
						<a href="/accessory/?id=01t5g000003NtmgAAC">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/captains_chair_bundle.jpg" loading="lazy"/>
						</a>
                </div>
    
                <div class="_group">
                    <div class="text_block left">
                    <h6 class="navy">$4 PER WEEK</h6>
                    <h5 class="navy">The Captain’s Chair Bundle</h5>
                    <!-- <div class="large _regular"> -->
                        <p class="normal">                   
                        Bundle includes seat, bars & foot pegs.
                        </p>                  
                    <!-- </div> -->                        
                    </div>
                </div>
    
                </div>
    
                <div class="button_wrap_center_vert">
    
                <button class="button naked_white">See all 28 accessories ></button>      
    
                </div> 
            </div>        
    
        </section>

        </main>

<!--  end of template -->



<?php
get_footer();