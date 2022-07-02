<?php

/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Commuter - Lug & Carrie
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
            
            <video class="lazy" autoplay muted loop playsinline poster="<?php echo $child_theme_dir_file; ?>/img/commuter/Lug_Carrie_commuter_hero_poster.jpg" id="backgroundVideo">
                <source data-src="<?php echo $child_theme_dir_file; ?>/video/Lug_Carrie_Commuter_06sec.mp4" type="video/mp4">
            </video>

            <div class="overlay"></div>

            <div class="_row">        
                <div class="column_50">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>The commute to&nbsp;work?
                                No&nbsp;sweat.</h1>
                            <div class="large _regular">
                                Easy to ride from the first pedal, our Tern eBike options make trips to and from work, the gym and the supermarket your own personal headspace.
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
                        <!-- <button class="button naked">Learn more</button>       -->

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
                            <!-- <button class="button naked">Learn more</button>       -->

                            </div> 
                        </div>
                        
                        </div>                
                    </div>          
                    
                </div>
                
            </div>        

        </section>


        <section class="why_tern centered red_bg ">

            <!--  -->
            
            <div class="_row " data-aos="fade-up" data-aos-mirror="true">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">
                                Beat the bus for the same price. 
                            </h3>

                            <p class="normal ">
                                Life in the fast lane is often the bike lane.
                            </p>
                            <p class="normal "></p> 
                                Not only is travel in peak hours quicker by bike within 10km of the CBD, but it’s easier to stop for coffee on the way in, grab the milk on the way home or swing past the gywm without hassles of  parking or packed, unreliable public transport. 
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="video_wrap">
                        <!-- autoplay -->
                        
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/712687167?h=671a8bee45&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Commuter - 30 sec"></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>

                    
                    </div>
                </div>
            </div>

            <!--  -->

            <div class="_row " data-aos="fade-up" data-aos-mirror="true">   
                <div class="column_40 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">
                                Petite power. 
                            </h3>
                                
                            <p class="normal navy">
                                Shorter than a regular bike and with vertical storage, the Tern HSD is perfect for city living. The powerful Bosch motor allows you to ride further and flatten hills without breaking a sweat, even in your favourite outfit.
                            </p>
                            
                        </div>
                    </div>
    
                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_why_tern_frame_red.jpg" loading="lazy"/>
                    </div>
                </div>
            </div> 

            <!--  -->

            <div class="_row " data-aos="fade-up" data-aos-mirror="true">   
                <div class="column_40 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">
                                Little impact
                            </h3>
                                
                            <p class="normal navy">
                                An electric bike emits 2-5 grams of CO2 per kilometre ridden. In comparison, cars emit about 143g CO2 per kilometre.
                            </p>
                            
                                    
                        </div>
                    </div>
    
                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_why_tern_frame_under_blue.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>  
    
        </section>

        <section class="why_subscribe centered ">
            <div class="_row ">   
                
                <div class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/family/family_why_subscribe.jpg" loading="lazy"/>
                    </div>
                </div>

                <div class="column_40 centered">
                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="blue">Why subscribe?</h2>
                            
                            <p class="normal navy">
                                The best thing of all, you get to try on the lifestyle before you buy. The vast majority of our customers love their new life on an L+C bike. For the small group that don’t, they can cancel their subscription and hand the bike back rather than having a five to eight thousand dollar high performance dust gatherer in their garage.
                            </p>
							
							<div class="button_wrap_center_vert">
      
                                <button class="button blue_btn getstarted">Get Started</button>
                                <a href="/why-subscribe/" class="button naked">Learn more</a>      
              
                            </div>
                                
                        </div>
                        
        
                    </div>
                </div>        
    
        </section>


        <section class="how_it_works _no-flex white_bg">

            <div class="_row _no-margin">   
                <div class="column_100 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="blue">How it works</h2>
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
                                            Starting a new fitness class and need to carry more gear? Swap accessories or upgrade your bike at any time.
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
<!--  end of template -->
  <!-- https://flickity.metafizzy.co/ -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- AOS animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init(
            {
                duration: 750,
                easing: 'ease-in-out',
            }
        );
    </script>


<?php
get_footer();