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
      <!-- autoplay src="<?php echo $child_theme_dir_file; ?>/video/rain.mp4" -->
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
                    A Lug+Carrie subscription gives you the freedom to explore further + ride more often knowing all your expenses are included and that we’ve got your back with roadside assistance.
                  </p>
                  <p class="normal navy">
                    A Lug+Carrie grows with your lifestyle, If one child turns into 2, or Rex wants to ride shotgun, we’re a phone call away from coming to your place and swapping bikes, seats and accessories to suit.
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

    <section class="_x2-padding _no_padding_bot _no-margin gray_100_bg centered">
      <div class="_row _no-margin">                             
        <div class="column_100">

          <div class="_wrap">
            <div class="text_block">
              
              <h3 class="h3 center blue _no_char">
                A Lug+Carrie to Suit Any&nbsp;Lifestyle
              </h3>
              <h4 class="center navy _no_char">Our Most Popular Family Set Ups</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="set_up-family_sect _no-flex">

        <div class=""> 
           <!-- Flickity HTML init -->
           <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            
            <!-- family 01 -->
            <div class="gallery-cell">
              <div class="cell">
                <div class="img_wrap">
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/GSD_School_Bus.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h5 class="title">
                    The School Bus
                  </h5>
                  <div class="desc">
                    <strong>Tern GSD - from $71 per week</strong>
                    <p class="normal">
                      All the school bags+rock star parking - bring the joy back to the school run. Will comfortably transport 1-2 larger children (26+kg and appx 130 cm tall). 
                    </p>
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
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Kinder_Surprise.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h5 class="title">
                    The Kinder Surprise
                  </h5>
                  <div class="desc">
                    <strong>Tern HSD - from $51 per week</strong>
                    <p class="normal">
                      The surprise? The kinder run can be fun. Comfortably transport 1 younger child up to 22kg in weight.
                    </p>
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
                  <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/GSD_Adventurer.jpg" loading="lazy"/>
                </div>
                <div class="text_wrap">
                  <h5 class="title">
                    The Adventurer
                  </h5>
                  <div class="desc">
                    <strong>Tern GSD - from $77 per week</strong>
                    <p class="normal">
                      Perfect for taking both little ones and all their kit on an adventure. Suits 2 adventurers, 1 weighing less than 22kg in the child seat, 1 bigger kid over 18kg.
                    </p>
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
                    <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Mini_Bus.jpg" loading="lazy"/>
                  </div>
                  <div class="text_wrap">
                    <h5 class="title ">
                      The Mini Bus
                    </h5>
                    <div class="desc">
                      <strong>Tern HSD - from $51 per week</strong>
                      <p class="normal">
                        The school run has never been so fun! Packed lunches + 1 child of 18kg and up and between 110-140cm in height.
                      </p>
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

    <section class="_x2-padding _no_padding_bot _no-margin centered">
      <div class="_row _no-margin">                             
        <div class="column_100">

          <div class="_wrap">
            <div class="text_block">
              
              <h4 class="center navy _no_char">Our Most Popular Commuter Set Ups</h4>
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
                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Entrepreneur.jpg" loading="lazy"/>
              </div>
              <div class="text_wrap">
                <h5 class="title">
                  The Professional 
                </h5>
                <div class="desc">
                  <strong>Tern HSD - from $50 per week</strong>
                  <p class="normal">
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
                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/HSD_Scoot.jpg" loading="lazy"/>
              </div>
              <div class="text_wrap">
                <h5 class="title ">
                  The Scoot
                </h5>
                <div class="desc">
                  <strong>Tern HSD - from $50 per week</strong>
                  <p class="normal">
                    From the shops to the bottle-o, for scootin around town and getting things done.  
                  </p>
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
                <p class="large">Join over 1,000 customers that have made the decision to leave the car at home more often</p>
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
                    For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
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
                    For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
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
                    For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It’s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                  </p>                  
                <!-- </div> -->                         
              </div>
            </div>

          </div>

        </div>        

    </section>
<!-- 
    <section class="service bg_cover centered ">

      <div class="_row ">   
          
        <div class="column_60">
          
        </div>
        
        <div class="column_40 centered">

          <div class="_wrap">
            <div class="text_block center">
                <h2 class="white">
                  Service and support
                </h2>
                <p class="normal white">
                  No matter where you ride, we have you and your bike covered. With a range of services to support you at every turn, you can protect your bike against theft, be alerted if someone tries to snatch it, and get help whenever and wherever you need it.
                </p>
              <div class="button_wrap_center_vert">

                <button class="button blue_btn">Book a time</button>
                <button class="button naked">Learn more ></button>

              </div>            
            </div>
          </div>

        </div>
      </div>      
    </section>
 -->
    
    <section class="how_it_works _no-flex white_bg">

      <div class="_row _no-margin">   
            <!-- <div class="column_10"></div>      -->
            <div class="column_100 centered">

                <div class="_wrap">
                    <div class="text_block center">
                        <h2 class="blue">An eBike to grow with</h2>
                    </div>

                </div>

            </div>
      </div>

      <div class="carousel"> 
        <!-- Flickity HTML init -->
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>

          <div class="gallery-cell">
              <div class="cell">

                  <div class="_panel bg_cover ">
                      
                      <!-- <div class="bg_image_panel">
                          <img src="<?php echo $child_theme_dir_file; ?>/img/family/how_it_works_consultant.jpg">
                      </div> -->

                      <div class="text_wrap white _x2-padding">
                          <h3 class="title center alpha" >Chat with our team</h3>
                          <div class="desc">
                              <p class="normal white center">Our experts can talk you through all your options and help you decide on the perfect bike to suit your lifestyle needs.</p>
                          </div>

                      </div>
                  </div>
              
              </div>                
          </div>

          <div class="gallery-cell">
              <div class="cell">

                  <div class="_panel bg_cover">
                      
                      <!-- <div class="bg_image_panel">
                          <img src="<?php echo $child_theme_dir_file; ?>/img/family/how_it_works_consultant.jpg">
                      </div> -->

                      <div class="text_wrap white _x2-padding">
                          <h3 class="title center alpha">Door to door delivery</h3>
                          <div class="desc">
                              <p class="normal white center">Complementary delivery includes a 40 minute orientation on your new bike.</p>
                          </div>

                      </div>
                  </div>
              
              </div>                
          </div>


          <div class="gallery-cell">
              <div class="cell">

                  <div class="_panel bg_cover">
                      
                      <!-- <div class="bg_image_panel">
                          <img src="<?php echo $child_theme_dir_file; ?>/img/family/how_it_works_consultant.jpg">
                      </div> -->

                      <div class="text_wrap white _x2-padding">
                          <h3 class="title center alpha">Here when you need&nbsp;us</h3>
                          <div class="desc">
                              <p class="normal white center">
                                  For peace of mind we include locks, an alarm and roadside assistance. If you have maintenance issues, we’ll come to you, so you’ll never be stranded.
                              </p>
                          </div>

                      </div>
                  </div>
              
              </div>                
          </div>

          <div class="gallery-cell">
            <div class="cell">

              <div class="_panel bg_cover">                                        

                <div class="text_wrap white _x2-padding">

                  <h3 class="title center alpha">Flexible, for life</h3>
                  <div class="desc">
                      <p class="normal white center">
                          Things change, that’s why our subscription is flexible. Swap accessories or upgrade your bike at any time.
                      </p>
                  </div>

                </div>
              </div>
                
            </div>                
          </div>


        </div>

      </div>        

    </section>



  </main>







<?php
get_footer();
