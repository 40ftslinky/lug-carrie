<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Family page - Lug & Carrie
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
            <video class="lazy" autoplay muted loop playsinline poster="<?php echo $child_theme_dir_file; ?>/img/family/family_fullpage_bg.jpg" id="backgroundVideo">
                <source data-src="<?php echo $child_theme_dir_file; ?>/video/Lug_Carrie_Family_06sec.mp4" type="video/mp4">
            </video>

            <div class="overlay"></div>
        
            <div class="_row">        
                <div class="column_50">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>Make every<br>
                                day an<br>
                                adventure</h1>
                            <div class="large _regular">
                                Easy to ride from the first pedal, our Tern eBike options
                                for 1 or 2 children bring joy back to the school&nbsp;run.
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
    
    
        <section class=" set_up-family_sect _no-flex">
            <div class=""> 
                <!-- Flickity HTML init -->
                <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                
                    <!-- family 01 -->
                    <div class="gallery-cell">
                        <div class="cell">
                            <div class="img_wrap ">
                                <img class="" src="<?php echo $child_theme_dir_file; ?>/img/configure/preconfig/GSD_School_Bus.jpg" loading="lazy"/>
                            </div>
                            <div class="text_wrap">
                                <h5 class="title ">
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
                                <h5 class="title ">
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
                                <h5 class="title ">
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
                                <h5 class="title">
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

        <section class="why_tern centered blue_bg ">
            
            <!-- https://medium.com/elegant-seagulls/parallax-and-scroll-triggered-animations-with-the-intersection-observer-api-and-gsap3-53b58c80b2fa -->
            <!-- https://codepen.io/celli/pen/mdVMOjr -->
            <!--  -->

            <div class="_row ">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">
                                An eBike <br>to grow with
                            </h3>

                            <p class="normal ">
                                A Lug+Carrie grows with your family. It can be shared between parents, it is adjustable in  moments for riders of all sizes, and it is easy to swap accessories or bikes to accommodate new family members.
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="video_wrap">
                        
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/712687310?h=f822326454&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Family - 30 sec.mp4"></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>

                    
                    </div>
                </div>
            </div> 

            <!--  -->
            
            <div class="_row " >   
                    <div class="column_40 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">
                                A reassuring ride
                            </h3>
                                
                            <p class="normal navy">
                                Our bikes come with kickstands that allow you to easily load wriggling kids and the shopping at the same time, the smaller wheels give you confidence inspiring stability, and the cargo capacity combined with the powerful Bosch motor means you can flatten hills and leave the car at home.
                            </p>
                            
                        </div>
                    </div>
    
                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/family/family_why_tern_frame_blue.jpg" loading="lazy"/>
                    </div>
                </div>
            </div> 

            <!--  -->

            <div class="_row ">   
                <!-- <div class="_row ">    -->
                    <div class="column_40 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h3 class="navy">Your second car is a Lug+Carrie</h3>
                            <!-- <div class="large _regular"> -->
                                
                            <p class="normal navy">
                                The <a href="https://autocosts.info/au"  target="blank">average cost</a> of car ownership is $7,774 annually in Australia. 
                            </p>
                            <p class="normal navy">
                                A Lug+Carrie is a simpler way to get around, and it helps the planet. Imagine life without the traffic jams, parking hassles, insurance, rego, depreciation, unpredictable fuel prices and the Sasquatch sized carbon footprint! 
                            </p>
                            <!-- </div> -->
                            
                                    
                        </div>
                    </div>
    
                </div>
                
                <div data-aos="fade-in" data-aos-mirror="true" class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/family/family_why_tern_under_blue.jpg" loading="lazy"/>
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
                            <!-- <div class="large _regular"> -->
                            
                            <p class="normal navy">
                                The best thing of all, you get to try on the lifestyle before you buy. The vast majority of our customers love their new life on an L+C bike. For the small group that don’t, they can cancel their subscription and hand the bike back rather than having a five to eight thousand dollar high performance dust gatherer in their garage.
                            </p>
                            <!-- </div> -->
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