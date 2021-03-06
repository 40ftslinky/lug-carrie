<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Why Subscribe - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>



    <main>

        <section class="hero bg_cover">
            <!-- autoplay -->
        
            <video class="lazy" autoplay muted loop playsinline poster="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/Lug_Carrie_why_subscribe_hero_poster.jpg" id="backgroundVideo">
                <source data-src="<?php echo $child_theme_dir_file; ?>/video/Lug_Carrie_Subscription_06sec.mp4" type="video/mp4">
            </video>

            <div class="overlay"></div>

            <div class="_row">        
                <div class="column_60">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>Subscription eBikes, a&nbsp;whole new world</h1>
                            <div class="large _regular">
								A Lug+Carrie subscription equals flexibility. It means you can change your bike as your life changes.
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


        <section class="why_subscribe centered ">
            <div class="_row _no-margin">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="blue">Pay as you go</h2>

                            <p class="normal ">
                                The Lug+Carrie subscription is the best alternative to expensive eBikes. An award-winning, premium Tern eBike, one that???s set up perfectly for you and paid for by the week - that???s great value. 
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn getstarted">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div class="column_60">
                    <div class="video_wrap">
                       
                        <!-- vimeo embed -->
                        <div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/712687404?h=367a83014d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Subscription - 30 sec"></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    
                    </div>
                </div>
            </div>        

        </section>

        <section class="flexible centered red_bg ">
            <div class="_row ">             
                
                <div class="column_60">
                    <div class="img_wrap">
                        <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/why_subscribe_flexible.jpg" loading="lazy"/>
                    </div>
                </div>
    
                <div class="column_40 centered">
                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="navy">We bend over backwards to be flexible.</h2>
                            
                            <p class="normal navy">
                                A Lug+Carrie can grow with you, you???ll have ablilty to swap bikes and accessories as the kids grow or your needs change. 
                            </p>

                            <div class="button_wrap_center_vert">
                                <button class="button navy_btn getstarted">Get Started</button>
                            </div>
                                
                        </div>
                        
        
                    </div>
                </div>  
			</div>
    
        </section>

        <section class="why_subscribe_process _no-flex ">

            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">  
    
                        <div class="text_block center">
                            <h2 class="blue">So why subscribe?</h2>
                            <p class="normal">
                                You ride the bike, we own the hassles. A low committment, 4-week minimum subscription and stress free ownership means you can do more of life by bike.
                            </p>
                        </div>
        
                    </div>                                            
                </div>
            </div>
            <div class="_row "> 
            
                <div class="column_80 ">
                    <div class="process_wrap "> 
                        <div class="center_row ">                                                      

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_buy.svg" />
                                <span>
                                    You can buy your bike if you&nbsp;like
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_servicing.svg" />
                                <span>
                                    We come to you for&nbsp;servicing
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_switch.svg" />
                                <span>
                                    Switch bikes if your needs&nbsp;change
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_swap.svg" />
                                <span>
                                    Swap accessories if you need a&nbsp;change
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_cost.svg" />
                                <span>
                                    Minimal initial cost
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_rescue.svg" />
                                <span>
                                    Rider Rescue Cover
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_insurance.svg" />
                                <span>
                                    Insurance Included
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_included.svg" />
                                <span>
                                    Servicing included
                                </span>
                            </div>
                        </div> 

                    </div>
                </div> 
            </div>

            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">
                
                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn getstarted">Get Started</button>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="love bg_cover centered ">

            <div class="_row ">   
              
                <div class="column_40 centered">
        
                    <div class="_wrap">
                        <div class="text_block center">
                            <!-- <div class="large _regular"> -->
                            <h2 class="white">
                                Falling in love.  It&nbsp;happens. 
                            </h2>
                            <p class="normal white">
                                If you decide you want to ride off into the sunset  with your Lug+Carrie, you can. Your subscription payments can contribute to the price of the bike and you can purchase it outright. Speak with us for more details.
                            </p>
                            <!-- </div> -->
                            <div class="button_wrap_center_vert">
            
                            <a href="/contact/" class="button blue_btn">Contact Us</a>
            
                            </div>            
                        </div>
                    </div>
        
                </div>

                <div class="column_60">
                <!-- empty -->
                </div>

            </div>      
        </section>

        

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
                                            For peace of mind we include locks, an alarm and roadside assistance. If you have maintenance issues, we???ll come to you, so you???ll never be stranded.
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
                                            Things change, that???s why our subscription is flexible. Swap accessories or upgrade your bike at any time.
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



<?php
get_footer();