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

        <section class="hero bg_cover ">
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
                            <h1>Subscription eBikes, a&nbsp;whole new world.</h1>
                            <div class="large _regular">
                                A Lug+Carrie subscription equals flexibilty. It means you  can change your bike as your life changes.                            </div>
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


        <section class="why_subscribe centered ">
        <!-- <div class=""> -->
            <div class="_row _no-margin">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h2 class="blue">Pay as you go</h2>

                            <p class="normal ">
                                A top quality eBike can run into the thousands of dollars. A Lug+Carrie subscription gives you a test run on the eBike of your choice without the significant outlay. If things change and you’d like a different bike or accessory configuration, you can change things up. Or it may not be for you. No biggie, you can just hand the bike back at the end of the subscription period. 
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
<!--                         
						<video  muted loop id="inlineVideo" preload="none" poster="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/why_subscribe_poster.jpg">
                            <source src="./video/rain.mp4" type="video/mp4">
                        </video>

                        <div class="video_overlay_wrap">
                            <div class="play_button" id="playBtn_white" onclick="videoControlInline(); video_modal('subscribe');"  >                    
                                <svg class="play" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path class="circle" d="M52.168 26.584C52.168 40.7153 40.7137 52.168 26.584 52.168C12.4542 52.168 1 40.7152 1 26.584C1 12.4546 12.4543 1 26.584 1C40.7137 1 52.168 12.4546 52.168 26.584Z" stroke="white" stroke-width="2"/>
                                        <path class="arrow" d="M36.1075 26.9304L21.2863 35.167C21.1149 35.2637 20.9684 35.2749 20.8453 35.2004C20.7228 35.126 20.6613 34.9922 20.6613 34.7988V18.3701C20.6613 18.1768 20.7228 18.0427 20.8453 17.9683C20.9684 17.8941 21.1149 17.9053 21.2863 18.002L36.1075 26.2385C36.2789 26.3352 36.3644 26.4504 36.3644 26.5845C36.3644 26.7183 36.2789 26.8337 36.1075 26.9304V26.9304Z" fill="white"/>
                                    </g>                        
                                </svg>                                            
                            </div>

                            <div class="white" id="buttonText_white">Watch Video</div>
                        </div>
-->
						<div style="padding:56.25% 0 0 0;position:relative;">
                            <iframe src="https://player.vimeo.com/video/712687404?h=367a83014d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Subscription - 30 sec"></iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    
                    
                    </div>
                </div>
            </div>        

        <!-- </div> -->
        </section>

        <section class="flexible centered red_bg ">
            <!-- <div class=""> -->
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
                            <!-- <div class="large _regular"> -->
                            
                            <p class="normal navy">
                                Subscription equals flexibility. Accessorise your bike to your needs from just a few dollars a week. You can mix and match accessories when it suits you so you don’t end up with unsuitable (not to mention expensive) gear lying around in the shed gathering dust. When life changes so we give you can change bikes to fit your lifestyle and activities. 
                            </p>
                            <!-- </div> -->

                            <div class="button_wrap_center_vert">
                                <button class="button navy_btn getstarted">Get Started</button>
                            </div>
                                
                        </div>
                        
        
                    </div>
                </div> 
				
			</div>
            <!-- </div> -->
        </section>

		        <section class="why_subscribe_process _no-flex">

            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">  
    
                        <div class="text_block center">
                            <h2 class="blue">So why subscribe?</h2>
                            <p class="normal">
                                While you can buy your ride if you wish most choose the care free option of a
                                subscription. There’s a fair bit of effort that goes into maintaining a sophisticated
                                Tern eBike. With Lug+Carrie, none of that is your problem.
                            </p>
                        </div>
        
                    </div>                                            
                </div>
            </div>
            <div class="_row "> 
            
                <div class="column_80 ">
                    <div class="process_wrap "> 
                        <div class="center_row ">                                                      

                            <div class="_card">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_buy.svg" />
                                <span>
                                    You can buy your bike if you like
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_servicing.svg" />
                                <span>
                                    We come to you for servicing
                                </span>
                            </div>

                            <div class="_card">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_switch.svg" />
                                <span>
                                    Switch bikes if your needs change
                                </span>
                            </div>

                            <div class="_card centered">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_swap.svg" />
                                <span>
                                    Swap accessories if you a need change
                                </span>
                            </div>

                            <div class="_card">
                                <img class="subscribe_icon" src="<?php echo $child_theme_dir_file; ?>/img/why_subscribe/icons/LC_subscribe_cost.svg" />
                                <span>
                                    Minimal initial cost
                                </span>
                            </div>

                            <div class="_card">
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
                            <button class="button blue_btn">Get Started</button>
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
                                Falling in love. It&nbsp;happens. 
                            </h2>
                            <p class="normal white">
                                Subscription allows you to try before you buy. If you decide that you can’t live without your eBike you can buy it using your subscription as part payment. Conditions&nbsp;apply.
                            </p>
                            <!-- </div> -->
                            <div class="button_wrap_center_vert">
            
                            <button class="button blue_btn getstarted">Get Started</button>
            
                            </div>            
                        </div>
                    </div>
        
                </div>

                <div class="column_60">
                <!-- empty -->
                </div>

            </div>      
          </section>
		
		
		<section class="buy_out gray_100_bg _no-flex">

            <div class="_row "> 
            
                <div class="column_100 ">
                    <div class="_wrap center">  
    
                        <div class="text_block center">
                            <h2 class="blue">Subscription buy out options</h2>
                            <p class="normal">
                                While you can buy your ride if you wish most choose the care free option of a
                                subscription. There’s a fair bit of effort that goes into maintaining a sophisticated
                                Tern eBike. With Lug+Carrie, none of that is your problem.
                            </p>
                        </div>

                        <div class="_panel center">
                            <div class="table" id="results">
                                <div class='theader'>
                                  <div class='table_header'></div>
                                  <div class='table_header'>HSD</div>
                                  <div class='table_header'>GSD</div>
                                  <div class='table_header'>Accessories</div>
                                </div>
                                <div class='table_row'>
                                  <div class='table_small'>
                                    <div class='table_cell'></div>
                                    <div class='table_cell'>Per week</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>HSD</div>
                                    <div class='table_cell'>$44</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>GSD</div>
                                    <div class='table_cell'>$44
                                    </div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>Accessories</div>
                                    <div class='table_cell'>Varies</div>
                                  </div>
                                </div>
                                <div class='table_row'>
                                  <div class='table_small'>
                                    <div class='table_cell'></div>
                                    <div class='table_cell'>RRP</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>HSD</div>
                                    <div class='table_cell'>$6,395</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>GSD</div>
                                    <div class='table_cell'>$6,395</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>Accessories</div>
                                    <div class='table_cell'>Varies</div>
                                  </div>
                                </div>
                                <div class='table_row'>
                                  <div class='table_small'>
                                    <div class='table_cell'></div>
                                    <div class='table_cell'>6 months</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>HSD</div>
                                    <div class='table_cell'>$5,468</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>GSD</div>
                                    <div class='table_cell'>$5,468</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>Accessories</div>
                                    <div class='table_cell'>15% off</div>
                                  </div>
                                </div>
                                <div class='table_row'>
                                  <div class='table_small'>
                                    <div class='table_cell'></div>
                                    <div class='table_cell'>12 months</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>HSD</div>
                                    <div class='table_cell'>$4,604</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>GSD</div>
                                    <div class='table_cell'>$4,604</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>Accessories</div>
                                    <div class='table_cell'>50% off</div>
                                  </div>
                                </div>
                                <div class='table_row'>
                                  <div class='table_small'>
                                    <div class='table_cell'></div>
                                    <div class='table_cell'>24 months</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>HSD</div>
                                    <div class='table_cell'>$3,070</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>GSD</div>
                                    <div class='table_cell'>$3,070</div>
                                  </div>
                                  <div class='table_small'>
                                    <div class='table_cell'>Accessories</div>
                                    <div class='table_cell'>free</div>
                                  </div>
                                </div>
                                
                              </div>
                        </div>
        
                    </div>                                            
                </div>
            </div>

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



<?php
get_footer();