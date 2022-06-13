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
        <!-- <video  muted loop id="backgroundVideo">
            <source src="<?php echo $child_theme_dir_file; ?>/video/rain.mp4" type="video/mp4">
        </video> -->

        <!-- <div class="overlay"></div> -->
        <!-- <div class=""> -->
            <div class="_row">        
                <div class="column_50">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>The commute to&nbsp;work?
                                No&nbsp;sweat.</h1>
                            <div class="large _regular">
                                Easy to ride from the first pedal, our Tern eBike options make trips to and from work, the gym and the supermarket your own personal headspace.
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


        <section class="why_subscribe centered gray_100_bg">
        <!-- <div class=""> -->
            <div class="_row _no-margin">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="blue">The 2 wheeled social distancing technique</h2>

                            <p class="normal ">
                                The low centre of gravity will make you feel safe so you can enjoy the ride. You can carry everything you need, no sweat. Sports gear, shopping and the laptop for work get easily swallowed by our flexible accessories options. There’s 37 of them to personalise your ride . You can even accommodate a child or two if kinder or school is a part of your commute.
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div class="column_60">
                    <div class="video_wrap">
                        <!-- autoplay -->
<!--                         <video  muted loop id="inlineVideo" preload="none" poster="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_poster.jpg">
                            <source src="<?php echo $child_theme_dir_file; ?>/video/rain.mp4" type="video/mp4">
                        </video>

                        <div class="video_overlay_wrap">
                            <div class="play_button" id="playBtn_white" onclick="videoControlInline(); video_modal('commuter');"  >                    
                                <svg class="play" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path class="circle" d="M52.168 26.584C52.168 40.7153 40.7137 52.168 26.584 52.168C12.4542 52.168 1 40.7152 1 26.584C1 12.4546 12.4543 1 26.584 1C40.7137 1 52.168 12.4546 52.168 26.584Z" stroke="white" stroke-width="2"/>
                                        <path class="arrow" d="M36.1075 26.9304L21.2863 35.167C21.1149 35.2637 20.9684 35.2749 20.8453 35.2004C20.7228 35.126 20.6613 34.9922 20.6613 34.7988V18.3701C20.6613 18.1768 20.7228 18.0427 20.8453 17.9683C20.9684 17.8941 21.1149 17.9053 21.2863 18.002L36.1075 26.2385C36.2789 26.3352 36.3644 26.4504 36.3644 26.5845C36.3644 26.7183 36.2789 26.8337 36.1075 26.9304V26.9304Z" fill="white"/>
                                    </g>                        
                                </svg>                                            
                            </div>

                            <div class="white" id="buttonText_white">Watch Video</div>
                        </div>                     -->
						
						<div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/712687167?h=671a8bee45&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Commuter - 30 sec"></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>

                    
                    </div>
                </div>
            </div>        

        <!-- </div> -->
        </section>

        <section class="compare centered ">
            <!-- <div class=""> -->
            <div class="_row ">             
                
                <div class="column_60">
                <div class="img_wrap">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_compare.jpg" loading="lazy"/>
                </div>
                </div>
    
                <div class="column_40 centered">
    
                <div class="_wrap">
                    <div class="tab_block center">
                    <h2 class="blue">Compare the bikes</h2>
                    <!-- <p class="normal">
                        One of the most important parts of any electric bike are the electrics. Bosch is one of the top names in the business of e-bike motors and batteries. These deliver a ride that’s smooth and comfortable. The&nbsp;battery charges easily and quickly, and can charge fully in around 4&nbsp;hours. A full charge will last for up to 110km of riding, depending on how much pedal assistance you are using.
                    </p> -->
                    
                    <div class="tabs commuter_compare">
                        <div class=" tab-item "><a href="#tabs-gsd">Tern GSD</a></div>
                        <div class=" tab-item active"><a href="#tabs-hsd">Tern HSD</a></div>                    
                    </div>
                    
                    <div class="tab-content">
                        <div id="tabs-gsd" class="tab-pane ">
                            <ul>
                                <li>
                                    Carry 1 or 2 kids up to 7 years old
                                </li>
                                <li>
                                    Compact – similar length to a standard bike.
                                </li>
                                <li>
                                    Up to 57 litres of storage or up to 200kg
                                </li>
                                <li>
                                    Carry up to two kids plus groceries, or a whole lot of cargo
                                </li>
                                <li>
                                    Built-in dual-battery technology lets you ride all day
                                </li>
                                <li>
                                    Space-saving features like Flat Fold and Vertical Parking  
                                </li>
                                
                            </ul>
                        </div>
                        <div id="tabs-hsd" class="tab-pane active">
                            <ul>
                                <li>
                                    Light – similar weight to a normal bike
                                </li>
                                <li>
                                    Compact – shorter than  a standard bike.
                                </li>
                                <li>
                                    Up to 37 litres of storage or up to 170kg 
                                </li>
                                <li>
                                    Carry all you need for work, or the weeks groceries
                                </li>
                                <li>
                                    Built-in dual-battery technology lets you ride all day
                                </li>
                                <li>
                                    Space-saving features like Flat Fold and Vertical Parking
                                </li>
                            </ul>
                        </div>                    
                    </div>
                    
                    
                    <div class="button_wrap_center_vert">
    
                        <button class="button blue_btn">Configure HSD</button>      
    
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
                            <h2 class="navy">There’s no traffic jams on a bike.</h2>
                            <!-- <div class="large _regular"> -->
                                
                            <p class="normal navy">
                                Life in the fast lane is often the bike lane. It’s also the smart lane. The annual cost of running a car in Australia is tens of thousands of dollars. And it’s rare that your trip to work will involve more cargo than what can be carried on a Tern eCargo bike. So your L+C bike can be your second car, just way more cost effective. It’s positive transport without the traffic jams, parking, servicing, insurance, rego, fuel, depreciation and big fat carbon footprint. With fuel prices only going one way, your L+C is a great way to get around and cool for the planet. 
                            </p>
                            <!-- </div> -->                    
                                    
                        </div>
                    </div>
    
                </div>
                
                <div class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_why_tern.jpg" loading="lazy"/>
                    </div>
                </div>
            </div> 

            <!--  -->
            
            <div class="_row " data-aos="fade-up" data-aos-mirror="true">   
                <div class="column_40 centered">
    
                    <div class="_wrap">
                        <div class="text_block center">
                            <h6 class="white">Why a Tern eBike?</h6>
                            <h2 class="navy">
                                A Tern vs other eBikes
                            </h2>
                            <!-- <div class="large _regular"> -->
                                
                            <p class="normal navy">
                                We’ve ridden them all. In our opinion Tern is the best. And we’ve specced it with the best brakes, derailleurs, engines you name it. If things change and a better option hits the market we’ll stock that and you can choose to swap out your current bike.                            </p>
                            <!-- </div> -->
                            
                        </div>
                    </div>
    
                </div>
                
                <div class="column_60">
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
                            <h2 class="navy">What if it gets stolen?</h2>
                            <!-- <div class="large _regular"> -->
                                
                            <p class="normal navy">
                                Theft is extremely rare due to the built in alarm and locking systems. However, if professionals really go to the trouble of taking your bike, you will just have to pay an excess fee and we will give you another bike.                            </p>
                            <!-- </div> -->
                            
                                    
                        </div>
                    </div>
    
                </div>
                
                <div class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/commuter/commuter_why_tern_frame_under_blue.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>  
    
        </section>

        <section class="why_subscribe centered ">
            <!-- <div class=""> -->
            <div class="_row ">   
                <!-- <div class="column_10"></div>      -->           
                
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
                                
                        </div>
                        
        
                    </div>
                </div>        
    
            <!-- </div> -->
        </section>


        <section class="how_it_works _no-flex">

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
                            <h3 class="title center">Chat with our experts</h3>
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
                            <h3 class="title center">Door to door delivery</h3>
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
                            <h3 class="title center">Here when you need us</h3>
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
                        
                        <!-- <div class="bg_image_panel">
                            <img src="<?php echo $child_theme_dir_file; ?>/img/family/how_it_works_consultant.jpg">
                        </div> -->

                        <div class="text_wrap white _x2-padding">
                            <h3 class="title center">When life changes</h3>
                            <div class="desc">
                                <p class="normal white center">
                                    As your kids grow, your needs can change. That’s why your subscription is flexible. Swap accessories or upgrade your bike, at any time.
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