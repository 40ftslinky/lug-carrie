<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>


  <main>

    <section class="hero ">
      <!-- autoplay src="./video/rain.mp4" -->
      <video class="lazy" autoplay muted loop playsinline poster="<?php echo $child_theme_dir_file; ?>/img/Lug_Carrie_hero_poster.jpg" id="backgroundVideo">
        <source data-src="<?php echo $child_theme_dir_file; ?>/video/Lug_Carrie_Hero_10%20sec.mp4" type="video/mp4">
      </video>

      <div class="overlay"></div>
      <!-- <div class=""> -->
        <div class="_row">        
          <div class="column_50">

            <div class="_wrap">
              <div class="text_block center">
                <h1>Daily life, done&nbsp;better.</h1>
                <div class="large _regular">
                  Our quality eBikes, flexible subscription, and city wide service help you do more of life by bike.
                </div>
                <div class="button_wrap_center">

                  <div class="play_button" id="playBtn" onclick="videoControl(); video_modal('home');"  >
                    <svg class="play" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                      <path class="circle" d="M26.584 53.168C41.266 53.168 53.168 41.2676 53.168 26.584C53.168 11.9023 41.266 0 26.584 0C11.902 0 0 11.9023 0 26.584C0 41.2676 11.902 53.168 26.584 53.168Z" fill="#00C1DC"/>
                      <path class="arrow"  d="M36.1075 26.9304L21.2863 35.167C21.1149 35.2637 20.9684 35.2749 20.8453 35.2004C20.7228 35.126 20.6613 34.9922 20.6613 34.7988V18.3701C20.6613 18.1768 20.7228 18.0427 20.8453 17.9683C20.9684 17.8941 21.1149 17.9053 21.2863 18.002L36.1075 26.2385C36.2789 26.3352 36.3644 26.4504 36.3644 26.5845C36.3644 26.7183 36.2789 26.8337 36.1075 26.9304V26.9304Z" fill="white"/>
                      </g>                    
                    </svg>                    
                  </div>

                  <div class="" id="buttonText">Play Video</div>
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


    <section class="why_subscribe centered red_bg navy">
      <!-- <div class=""> -->
        <div class="_row _no-margin">   
          <!-- <div class="column_10"></div>      -->
          <div class="column_40 centered">

            <div class="_wrap">
              <div class="text_block center">
                <h2 class="navy">Why subscribe?</h2>
                <!-- <div class="large _regular"> -->
                  <p class="normal navy">
                    A subscription is more flexible than owning a bike, because life changes and your needs might change. You can swap accessories, upgrade, downsize or give the bike back. You’ll never pay for service, and our team can come to you for most repairs. You need not worry about Insurance, locks and alarms either because those things are included in your subscription as well.
                  </p>
                  <p class="normal navy">
                    You can even buy your bike, if you fall in love. It happens.
                  </p>
                <!-- </div> -->
                <div class="button_wrap_center_vert">

                  <button class="button navy_btn getstarted">Get Started</button>
                  <a href="/why-subscribe/"><button class="button naked_white">Learn more</button></a>     

                </div>            
              </div>
            </div>

          </div>
          
          <div class="column_60">
            <div class="img_wrap">
              <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe.jpg" loading="lazy"/>
            </div>
          </div>
        </div>        

      <!-- </div> -->
    </section>

    <section class="set_up-family_sect _no-flex">

        <div class=""> 
           <!-- Flickity HTML init -->
           <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            
            <!-- family 01 -->
            <div class="gallery-cell">
              <div class="cell">
                <div class="img_wrap">
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/GSD_Beach-Buggy.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h3 class="title center">The Beach Buggy</h3>
                  <div class="desc">
                    <strong>Tern GSD - from $44 per week</strong>
                    <p class="normal">Adventures with the whole gang. <br>
                      1 or 2 kids + the toy collection</p>
                  </div>
                  <div class="button_wrap_center_vert">

                    <button class="button blue_btn getstarted">Get Started</button>
                    <button class="button naked">Learn more</button>      
  
                  </div> 
                </div>
                
              </div>                
            </div>

            <!-- family 02 -->
            <div class="gallery-cell">
              <div class="cell">
                <div class="img_wrap">
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Only-Child.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h3 class="title center">The Favourite Child</h3>
                  <div class="desc">
                    <strong>Tern HSD - from $61 per week</strong>
                    <p class="normal">Forget queues at the school. Speedy drop offs for 1 kid + School bags</p>
                  </div>
                  <div class="button_wrap_center_vert">

                    <button class="button blue_btn getstarted">Get Started</button>
                    <button class="button naked">Learn more</button>      
  
                  </div> 
                </div>
                
              </div>                
            </div>

            <!-- family 03 -->
            <div class="gallery-cell">
              <div class="cell">
                <div class="img_wrap">
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/GSD_School-Bus.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h3 class="title center">The School Bus</h3>
                  <div class="desc">
                    <strong>Tern GSD - from $61 per week</strong>
                    <p class="normal">Music lessons and school sports?
                      1 or 2 kids + trumpets and twirling batons</p>
                  </div>
                  <div class="button_wrap_center_vert">

                    <button class="button blue_btn getstarted">Get Started</button>
                    <button class="button naked">Learn more</button>      
  
                  </div> 
                </div>
                
              </div>                
            </div>

            <!-- family 04 -->
            <div class="gallery-cell">
                <div class="cell">
                  <div class="img_wrap">
                    <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Dinker.jpg" loading="lazy"/>
                  </div>
                  <div class="text_wrap">
                    <h3 class="title center">The Dinker</h3>
                    <div class="desc">
                      <strong>Tern HSD - from $61 per week</strong>
                      <p class="normal">The school run has never been more fun. Cargo eBikes for 1 or 2 kids.</p>
                    </div>
                    <div class="button_wrap_center_vert">

                      <button class="button blue_btn getstarted">Get Started</button>
                      <button class="button naked">Learn more</button>      
    
                    </div> 
                  </div>
                  
                </div>                
              </div>
            
          </div>
          
        </div>        

    </section>

    <section class="set_up-commuter_sect _no-flex">

      <div class=""> 
         <!-- Flickity HTML init -->
         <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
          <!-- commuter 01 -->
          <div class="gallery-cell">
            <div class="cell">
              <div class="img_wrap">
                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Commuter.jpg" loading="lazy"/>
              </div>
              <div class="text_wrap">
                <h3 class="title center">The Professional </h3>
                <div class="desc">
                  <strong>Tern HSD - from $44 per week</strong>
                  <p class="normal">The commute, no sweat.<br> 
                    Beat the bus, for the same price. </p>
                </div>
                <div class="button_wrap_center_vert">

                  <button class="button blue_btn getstarted">Get Started</button>
                  <button class="button naked">Learn more</button>      

                </div> 
              </div>
              
            </div>                
          </div>
          <!-- commuter 02 -->
          <div class="gallery-cell">
            <div class="cell">
              <div class="img_wrap">
                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Gym_Junkie.jpg" loading="lazy"/>
              </div>
              <div class="text_wrap">
                <h3 class="title center">The Gym Junkie</h3>
                <div class="desc">
                  <strong>Tern HSD - from $44 per week</strong>
                  <p class="normal">Like to workout before work?<br>
                    50+ km of charge + dumbells for your PT session.</p>
                </div>
                <div class="button_wrap_center_vert">

                  <button class="button blue_btn getstarted">Get Started</button>
                  <button class="button naked">Learn more</button>      

                </div> 
              </div>
              
            </div>                
          </div>
          <!-- commuter 03 -->
          <div class="gallery-cell">
            <div class="cell">
              <div class="img_wrap">
                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Entrepreneur.jpg" loading="lazy"/>
              </div>
              <div class="text_wrap">
                <h3 class="title center">The Entrepreneur</h3>
                <div class="desc">
                  <strong>Tern HSD - from $44 per week</strong>
                  <p class="normal">Run a business and the local deliveries?<br>
                    The ute of electric bikes.</p>
                </div>
                <div class="button_wrap_center_vert">

                  <button class="button blue_btn getstarted">Get Started</button>
                  <button class="button naked">Learn more</button>      

                </div> 
              </div>
              
            </div>                
          </div>
         
       </div>
        
      </div>        

  </section>
  

    <section class="why_choose centered blue_bg">
      <!-- <div class=""> -->
        <div class="_row ">             
          
          <div class="column_60">
            <div class="img_wrap">
			<!--  dir = <?php echo $child_theme_dir_file; ?> -->
              <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/why_choose_quality.jpg" loading="lazy"/>
            </div>
          </div>

          <div class="column_40 centered">

            <div class="_wrap">
              <div class="tab_block center">
                <h2 class="navy">Why choose a Tern eBike?</h2>
                <!-- <p class="normal">
                  One of the most important parts of any electric bike are the electrics. Bosch is one of the top names in the business of e-bike motors and batteries. These deliver a ride that’s smooth and comfortable. The&nbsp;battery charges easily and quickly, and can charge fully in around 4&nbsp;hours. A full charge will last for up to 110km of riding, depending on how much pedal assistance you are using.
                </p> -->
                
                <div class="tabs">
                  <div class=" tab-item active"><a href="#tabs-easy">Easy</a></div>
                  <div class=" tab-item "><a href="#tabs-quality">Quality</a></div>
                  <div class=" tab-item "><a href="#tabs-safety">Safety</a></div>
                  <div class=" tab-item "><a href="#tabs-fun">Fun</a></div>
                </div>
              
                <div class="tab-content">
                  <div id="tabs-easy" class="tab-pane active">
                    <p>Tern’s unique bike designs make all their bikes super easy to ride, store and adjust for other riders. Tern bikes are highly awarded by not only Wired magazine, but many leading cycling publications.</p>
                  </div>
                  <div id="tabs-quality" class="tab-pane ">
                    <p class="navy">
                      One of the most important parts of any electric bike are the electrics. Bosch is one of the top names in the business of e-bike motors and batteries. These deliver a ride that’s smooth and comfortable. The battery charges easily and quickly, and can charge fully in around 4 hours. A full charge will last for up to 110km of riding, depending on how much pedal assistance you are using.
                    </p>
                  </div>
                  <div id="tabs-safety" class="tab-pane">
                    <p>Tern bikes have a low centre of gravity. This makes the ride super sturdy for the rider and precious passengers. Bright lights and powerful disc break technology combine with the design to make Tern bikes as safe as a bike can be.</p>
                  </div>
                  <div id="tabs-fun" class="tab-pane">
                    <p>Bikes that are safe and easy to ride enable the rider and passengers to focus on the good stuff: The excitement of motion, the outdoor world and smiles all round.</p>
                  </div>
                </div>
                
                
                <div class="button_wrap_center_vert">

                  <button class="button naked_white">Learn more ></button>      

                </div>            
              </div>
            </div>

          </div>
        </div>        

    </section>

    <!-- needs to be carousel - populated from accessories page content -->
    <section class="accessories centered yellow_bg">
      <!-- <div class=""> -->
        <div class="_row ">             
          
          <div class="column_100">
            <div class="_wrap">
              <div class="text_block center">
                <h2 class="navy">Accessories for all life’s needs</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="_row _max_width_1600 three_col">             
          
          <div class="column_third _x2-padding">
            <div class="img_wrap">
             <a href="/accessory/"><img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/cargo_hold_37_panniers.jpg" loading="lazy"/></a>
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

          <div class="column_third _x2-padding">
            <div class="img_wrap">
              <a href="/accessory/"><img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/sidekick_seat_pad.jpg" loading="lazy" /></a>
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

          <div class="column_third _x2-padding">
            <div class="img_wrap">
              <a href="/accessory/"><img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/accessories/captains_chair_bundle.jpg" loading="lazy"/></a>
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

            <a href="/accessories/"><button class="button naked_white">See all 28 accessories ></button></a>      

          </div> 
        </div>        

    </section>

    <section class="tern_gsd centered gray_100_bg ">
      <!-- <div class=""> -->
        <div class="_row ">   
          <!-- <div class="column_10"></div>      -->
          <div class="column_40 centered">

            <div class="_wrap">
              <div class="text_block center">
                <h2 class="blue">Tern HSD</h2>
                <!-- <div class="large _regular"> -->
                  <h4 class="navy">
                    From $44 per week
                  </h4>
                  <p class="normal gray_800">
                    Loaded with features. <br> 
The ultimate nimble cargo ebike.
                  </p>
                <!-- </div> -->
                <div class="button_wrap_center_vert">

                  <button class="button blue_btn getstarted">Get Started</button>
                  <button class="button naked">Learn more</button>      

                </div>            
              </div>
            </div>

          </div>
          
          <div class="column_60">
            <div class="img_wrap">
              <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/tern_hsd.jpg" loading="lazy"/>
            </div>
          </div>
        </div>        

      <!-- </div> -->
    </section>

    <section class="tern_hsd centered ">

      <div class="_row ">   
          
        <div class="column_60">
          <div class="img_wrap">
            <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/tern_gsd.jpg" loading="lazy"/>
          </div>
        </div>
        
        <div class="column_40 centered">

          <div class="_wrap">
            <div class="text_block center">
              <h2 class="blue">Tern GSD</h2>
              <!-- <div class="large _regular"> -->
                <h4 class="navy">
                  From $44 per week
                </h4>
                <p class="normal gray_800">
                  When you need to carry a load.  <br>
                  Rides like a bike, carries like a car.
                </p>
              <!-- </div> -->
              <div class="button_wrap_center_vert">

                <button class="button blue_btn getstarted">Get Started</button>
                <button class="button naked">Learn more</button>      

              </div>            
            </div>
          </div>

        </div>
      </div>      
    </section>

    <section class="testimonials centered gray_100_bg">
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
            

            <div class="_group white_bg">
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
            

            <div class="_group white_bg">
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
            

            <div class="_group white_bg">
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

    <section class="service bg_cover centered ">

      <div class="_row ">   
          
        <div class="column_60">
          
        </div>
        
        <div class="column_40 centered">

          <div class="_wrap">
            <div class="text_block center">
              <!-- <div class="large _regular"> -->
                <h2 class="white">
                  Service and support
                </h2>
                <p class="normal white">
                  No matter where you ride, we have you and your bike covered. With a range of services to support you at every turn, you can protect your bike against theft, be alerted if someone tries to snatch it, and get help whenever and wherever you need it.
                </p>
              <!-- </div> -->
              <div class="button_wrap_center_vert">

                <button class="button blue_btn">Book a time</button>
                <button class="button naked">Learn more ></button>

              </div>            
            </div>
          </div>

        </div>
      </div>      
    </section>

    <!-- 
    <section class="buttons">
      <div class="_wrap">
        <div class="text_block">
          
          <div class="intro">
            Try some buttons
          </div>

          <div class="button_wrap_left">
            <button class="button white_btn">Get Started</button>
            <button class="button ghost_white">Learn more</button>
        </div>


        </div>
      </div>
    </section> 
    -->

  </main>







<?php
get_footer();
