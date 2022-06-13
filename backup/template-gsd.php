<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: GSD - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>




<main>

        <section class="hero bg_cover ">
        <!-- autoplay -->
        <!-- <video  muted loop id="backgroundVideo">
            <source src="./video/rain.mp4" type="video/mp4">
        </video> -->

        <!-- <div class="overlay"></div> -->
        <!-- <div class=""> -->
            <div class="_row">        
                <div class="column_50">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>The GSD.<br>
                                Hey big lifter.</h1>
                            <div class="large _regular">
                                A couple kids, a friend or a load of veggies from the market. Whatever you need to carry, the GSD has you sorted with up to 200kgs of cargo capacity. 
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


        <section class="meet_gsd centered gray_100_bg">
        <!-- <div class=""> -->
            <div class="_row _no-margin">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h3 class="blue">The fastest shopping trolley in the world.</h3>

                            <p class="normal ">
                                Why waste time looking for a parking spot on your next shopping expedition. The GSD will change the way you get around your city. It’s not only convenient and cheap, the GSD is the same length as a regular bike, so it’s super easy to ride. Our ecosystem of accessories includes a huge range of cargo-carrying options designed to keep your load secure and stable.
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn getstarted">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div class="column_60">
                    <div class="video_wrap">
                        <!-- autoplay -->
                        <video  muted loop id="inlineVideo" preload="none" poster="<?php echo $child_theme_dir_file; ?>/img/bikes/GSD_shopping.jpg">
                            <source src="<?php echo $child_theme_dir_file; ?>/video/rain.mp4" type="video/mp4">
                        </video>

                        <div class="video_overlay_wrap">
                            <div class="play_button" id="playBtn_white" onclick="videoControlInline()"  >                    
                                <svg class="play" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path class="circle" d="M52.168 26.584C52.168 40.7153 40.7137 52.168 26.584 52.168C12.4542 52.168 1 40.7152 1 26.584C1 12.4546 12.4543 1 26.584 1C40.7137 1 52.168 12.4546 52.168 26.584Z" stroke="white" stroke-width="2"/>
                                        <path class="arrow" d="M36.1075 26.9304L21.2863 35.167C21.1149 35.2637 20.9684 35.2749 20.8453 35.2004C20.7228 35.126 20.6613 34.9922 20.6613 34.7988V18.3701C20.6613 18.1768 20.7228 18.0427 20.8453 17.9683C20.9684 17.8941 21.1149 17.9053 21.2863 18.002L36.1075 26.2385C36.2789 26.3352 36.3644 26.4504 36.3644 26.5845C36.3644 26.7183 36.2789 26.8337 36.1075 26.9304V26.9304Z" fill="white"/>
                                    </g>                        
                                </svg>                                            
                            </div>

                            <div class="white" id="buttonText_white">Watch Video</div>
                        </div>                    

                    
                    </div>
                </div>
            </div>        

        <!-- </div> -->
        </section>

        <section class="meet_gsd centered ">
            <!-- <div class=""> -->
            <div class="_row ">             
                
                <div class="column_60">                
					<div class="video_wrap">
						<!-- autoplay -->
						<video autoplay muted loop id="inlineVideo" preload="none" poster="<?php echo $child_theme_dir_file; ?>/img/bikes/GSD_meet_the_gsd.jpg" loading="lazy">
							<source src="<?php echo $child_theme_dir_file; ?>/video/GSD_loop.mp4" type="video/mp4">
						</video>                                                               
					</div>
				</div>

    
                <div class="column_40 centered">
    
                <div class="_wrap">
                    <div class="left">
                    <h3 class="blue">Meet the GSD</h3>
                    <!-- <p class="normal">
                        One of the most important parts of any electric bike are the electrics. Bosch is one of the top names in the business of e-bike motors and batteries. These deliver a ride that’s smooth and comfortable. The&nbsp;battery charges easily and quickly, and can charge fully in around 4&nbsp;hours. A full charge will last for up to 110km of riding, depending on how much pedal assistance you are using.
                    </p> -->
                    
                    
                    
                    <div class="">
                        <div class="list_wrap">
                            <ul class="icon_list">
                                <li class="icon_cargo">
                                    Precious Cargo x2
                                </li>
                                <li class="icon_parking">
                                    FlatFold and Vertical Parking (only takes 5 secs)
                                </li>
                                <li class="icon_range">
                                    Battery Range – 250Km
                                </li>
                                <li class="icon_power">
                                    Bosch Power - 85 Nm of torque
                                </li>
                                <li class="icon_comfortable">
                                    Comfortable Suspension
                                </li>
                                <li class="icon_solar">
                                    Carbon Neutral with your Solar Home  
                                </li>
                            </ul>
                        </div>                   
                    </div>
                    
                    
                    <div class="button_wrap_left_vert">
    
                        <button class="button blue_btn">Configure GSD</button>      
                        <button class="button ghost_naked_btn">Learn More ></button>      
    
                    </div>            
                    </div>
                </div>
    
                </div>
            </div>        
    
        </section>

        <section class="options bg_cover centered ">

            <div class="_row ">
                
                <div class="column_40 centered">
      
                    <div class="_wrap">
                      <div class="text_block center">
                        <!-- <div class="large _regular"> -->
                          <h2 class="white">
                            Bike options
                          </h2>
                          <p class="normal white">
                            Go on, try on the eCargo life with a Tern GSD. You can access our configurator here. 100% of our reviews are 5 star and the majority of people who try a subscription never look back. You’ll love it too.
                          </p>
                        <!-- </div> -->
                        <div class="button_wrap_center_vert">
          
                          <button class="button blue_btn">Configure GSD</button>
          
                        </div>            
                      </div>
                    </div>
          
                  </div>
                
                <div class="column_60">
                    
                </div>
              
            </div>      
          </section>

        <section class="testimonials centered ">
            <!-- <div class=""> -->
              <div class="_row ">             
                
                <div class="column_100">
                  <div class="_wrap ">
                    <div class="text_block center">
                      <h2 class="navy">5 star reviews</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="_row _max_width_1600 three_col">             
                
                <div class="column_third _x2-padding">
                  
      
                  <div class="_panel white_bg">
                    <div class="text_block left">
                      <h5 class="navy">Gaurav Bhasin</h5>
                      <h6 class="navy">Description</h6>
                      <div class="stars yellow">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
      
                      <!-- <div class="large _regular"> -->
                        <p class="normal">                   
                          For someone who has not ridden the bike for 
      last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                        </p>                  
                      <!-- </div> -->                         
                    </div>
                  </div>
      
                </div>
      
                <div class="column_third _x2-padding">
                  
      
                  <div class="_panel white_bg">
                    <div class="text_block left">
                      <h5 class="navy">Gaurav Bhasin</h5>
                      <h6 class="navy">Description</h6>
                      <div class="stars yellow">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
      
                      <!-- <div class="large _regular"> -->
                        <p class="normal">                   
                          For someone who has not ridden the bike for 
      last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                        </p>                  
                      <!-- </div> -->                         
                    </div>
                  </div>
      
                </div>
      
                <div class="column_third _x2-padding">
                  
      
                  <div class="_panel white_bg">
                    <div class="text_block left">
                      <h5 class="navy">Gaurav Bhasin</h5>
                      <h6 class="navy">Description</h6>
                      <div class="stars yellow">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
      
                      <!-- <div class="large _regular"> -->
                        <p class="normal">                   
                          For someone who has not ridden the bike for 
      last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                        </p>                  
                      <!-- </div> -->                         
                    </div>
                  </div>
      
                </div>
      
              </div>        
      
          </section>
      



        </main>

<!--  end of template -->



<?php
get_footer();