<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Accessories page - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>




    <main>

        <section class="hero bg_cover centered">
        <!-- autoplay -->
        <!-- <video  muted loop id="backgroundVideo">
            <source src="./video/rain.mp4" type="video/mp4">
        </video> -->

        <!-- <div class="overlay"></div> -->
        <!-- <div class=""> -->
            <div class="_row">        
                <div class="column_60">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>Accessories</h1>
                                
                        </div>
                    </div>

                </div>
            </div>
            <div class="_row _bottom _center">
                <div class="page_down_wrap">
                    <svg class="chev_down" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path d="M19.3647 38.73C8.68701 38.73 0 30.0435 0 19.3665C0 8.68774 8.68701 0 19.3647 0C30.0425 0 38.73 8.68774 38.73 19.3665C38.73 30.0435 30.0425 38.73 19.3647 38.73V38.73ZM19.3647 1.51221C9.52051 1.51221 1.51172 9.52148 1.51172 19.3665C1.51172 29.2097 9.52051 37.2178 19.3647 37.2178C29.209 37.2178 37.2183 29.2097 37.2183 19.3665C37.2183 9.52148 29.2095 1.51221 19.3647 1.51221Z" fill="#EBEAFA"/>
                            <path d="M25.6243 19.0068L19.9003 24.7305C19.8266 24.8047 19.7161 24.8535 19.6178 24.8535C19.5195 24.8535 19.409 24.8047 19.3353 24.7305L13.6113 19.0068C13.5375 18.9326 13.4884 18.8223 13.4884 18.7236C13.4884 18.626 13.5375 18.5156 13.6113 18.4414L14.2254 17.8271C14.2991 17.7539 14.3974 17.7051 14.5079 17.7051C14.6062 17.7051 14.7167 17.7539 14.7905 17.8271L19.6178 22.6553L24.4451 17.8271C24.5189 17.7539 24.6294 17.7051 24.7277 17.7051C24.8259 17.7051 24.9365 17.7539 25.0102 17.8271L25.6243 18.4414C25.6981 18.5156 25.7472 18.626 25.7472 18.7236C25.7472 18.8223 25.6981 18.9326 25.6243 19.0068V19.0068Z" fill="#EDEDED"/>
                        </g>                  
                    </svg>                  
                </div>
            </div>

        <!-- </div> -->
        </section>


        

        <section class="listing centered ">
            <!-- <div class=""> -->
            <div class="_row ">             
                
                <div class="column_100">
                    <div class="text_block center">
                        <div class="large _regular">
                            <p class="large _regular">
                                Lug+Carrie has over 20 accessories and add-ons that can be combined in dozens of different ways, giving you a chance to customise your ride. 
                            </p>
                            <p class="large _regular">
                                Find some that you like? Head to the Lug+Carrie Bike Builder to see what they look like on a Tern GSD or HSD.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="column_row centered">
                            
                <div class="_group ">
                    <!-- <div class="panel inline"> -->
                    <div class="select_group">
                        <label>
                            <!-- State -->
                            <select>
                                <option value="Select" disabled selected hidden>Filter by Bike</option>
                                <option>GSD</option>
                                <option>HSD</option>
                            </select>
                        </label>
                    </div>
                    <div class="select_group">
                        <label>
                            <!-- Region -->
                            <select>
                                <option value="Select" disabled selected hidden>Filter by Use</option>
                                <option>Passenger</option>
                                <option>Cargo</option>
                            </select>
                        </label>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            
			
			
			
            <div class="_row _max_width_1600 three_col">             
				<?php
					$url = "https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/bike"; 
						
					$res=doAPI($url);
				
			foreach($res as $bike){
			
				$accessories=$bike->accessories;
			
				foreach($accessories as $accessory){
				
					$pricing=$accessory->pricing;
					$stripeProductId=$accessory->stripeProductId;
					$thumbnailUrl=$accessory->thumbnailUrl;
					$layer=$accessory->layer;
					$highresUrl=$accessory->highresUrl;
					$Id=$accessory->Id;
					$description=$accessory->description;
					$configuratorUrl=$accessory->configuratorUrl;
					$accessoryType=$accessory->accessoryType;
					$accessoryName=$accessory->accessoryName;
					$accessoryFamily=$accessory->accessoryFamily;
					$accessoryCode=$accessory->accessoryCode;				
					foreach($pricing as $price){
						if(($price->priceType=="Consumer") && ($price->interval=="week")){
							$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
						}
					}			
				
					if(empty($highresUrl)){
						$highresUrl="/wp-content/themes/lug-carry-storefront-child/img/placeholder.jpg";
					}
				
				?>
		  
				
                <div class="column_quarter _panel _no-padding">
                    <div class="img_wrap _no-margin">
                        <a href="/accessory/?id=<?php echo $Id ?>"><img class="cover" src="<?php echo $highresUrl; ?>" loading="lazy"/></a>
                    </div>
        
                    <div class="_group _x1-padding">
                        <div class="text_block left-aligned">
                            <h6 class="navy">$<?php echo $display_price ?> PER WEEK</h6>
                            <h5 class="navy"><?php echo $accessoryName ?></h5>
                            <p class="normal">                   
                                <?php echo $description; ?>                
                            </p> 
                            <div class="button_wrap_center_left">
                                <a href="/accessory/?id=<?php echo $Id ?>" class="button blue_btn">Learn More</a>
                            </div>                 
                        </div>
                        
                    </div>
      
                </div>
      
				<?php
					}
				}
				
				?>
				

      
                <div class="button_wrap_center_vert">
      
                  <button class="button naked_white">See all accessories ></button>      
      
                </div> 

            </div>      
        </section>





        </main>
<!--  end of template -->



<?php
get_footer();