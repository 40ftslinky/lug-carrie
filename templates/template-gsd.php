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
        
            <div class="_row">        
                <div class="column_50">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>The Tern GSD.<br>
                                Hey big lifter.</h1>
                            <div class="large _regular">
                                A couple of kids to school or your partner for date night. Wherever you need to go and whatever you need to carry. 
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



        <section class="meet_gsd centered ">
            <div class="_row ">             
                                

                <div class="column_60">
                    <div class="video_wrap">
                        <!-- autoplay -->
                        <video autoplay muted loop id="inlineVideo" class="loop" preload="none" poster="./video/GSD_loop.gif">
                            <source src="<?php echo $child_theme_dir_file; ?>/video/GSD_loop.mp4" type="video/mp4">
                        </video>                                                               
                    </div>
                </div>
    
                <div class="column_40 centered">
    
                <div class="_wrap">
                    <div class="left">
                    <h3 class="blue">Meet the Tern GSD</h3>
                    <!-- <p class="normal">
                        One of the most important parts of any electric bike are the electrics. Bosch is one of the top names in the business of e-bike motors and batteries. These deliver a ride that???s smooth and comfortable. The&nbsp;battery charges easily and quickly, and can charge fully in around 4&nbsp;hours. A full charge will last for up to 110km of riding, depending on how much pedal assistance you are using.
                    </p> -->
                    
                    
                    
                    <div class="">
                        <div class="list_wrap">
                            <ul class="icon_list">
                                <li class="icon_cargo">
                                Carry precious cargo x2, or up to 200kg
                                </li>
                                <li class="icon_parking">
                                  20+ available accessories and add-ons
                                </li>
                                <li class="icon_range">
                                  Optional dual battery w/ range of up to 200km
                                </li>
                                <li class="icon_power">
                                  Bosch Cargo Line motor w/ +400% support
                                </li>
                                <li class="icon_comfortable">
                                  Suspension, built-in 190 lumen light + mudguards
                                </li>
                                <li class="icon_solar">
                                  Small wheels = low centre of gravity + stability
                                </li>
                            </ul>
                        </div>                   
                    </div>
                    
                    
                    <div class="button_wrap_left_vert">
    
                        <button class="button blue_btn getstarted">Configure your Tern GSD</button>      
                        <a href="/accessories?=gsd" class="button ghost_naked_btn">See the accessories</a>      
    
                    </div>            
                    </div>
                </div>
    
                </div>
            </div>        
    
        </section>

        <section class="meet_gsd best centered gray_100_bg">
            <div class="_row _no-margin">   
                <div class="column_40 centered">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h3 class="blue">Tern. Only the best.</h3>

                            <p class="normal ">
                                Lug+Carrie uses only award-winning Tern&nbsp;eBikes.
                            </p>
                            <p class="normal ">
                                It???s because they???re fully customisable, designed to be fit with seats, bags, and racks.  
                            </p>
                            <p class="normal ">
                                The Tern GSD is also adaptable - it comes equipped with adjustable handlebars and a telescopic seat post, allowing the bike to accommodate riders between 150 - 195 cm tall. This means everyone in the household can experience the Lug+Carrie lifestyle.
                            </p>                  

                        </div>

                        <div class="button_wrap_center_vert">
                            <button class="button blue_btn">Get Started</button>
                        </div>

                    </div>

                </div>
                
                <div class="column_60">
                    
                    <div class="column_60">
                        <div class="img_wrap">
                          <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/bikes/GSD_shopping.jpg" loading="lazy"/>
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
                            <h2 class="white">
                                Stable. Safe. Super.
                            </h2>
                            <p class="normal white">
                                Whether you???re riding solo or carrying a load, you???ll feel safe doing it on the Tern GSD. 
                            </p>
                            <p class="normal white">
                                Design features like smaller wheels make it easy to ride, and the Atlas Lockstand keeps the bike solid when parked. Oversized Schwalbe tyres and Magura hydraulic brakes keep you in control.
                            </p>
                            <p class="normal white">
                                It???s all about making you confident, and looking forward to that next ride.
                            </p>
                        <div class="button_wrap_center_vert">
          
                          <button class="button blue_btn">Configure your Tern GSD</button>
          
                        </div>            
                      </div>
                    </div>
          
                  </div>
                
                <div class="column_60">
                    
                </div>
              
            </div>      
        </section>

        <section class="testimonials centered gray_100_bg">
            <div class="_row ">             
                
                <div class="column_100">
                    <div class="_wrap ">
                        <div class="text_block center">
                            <h2 class="navy">5 star reviews</h2>
                            <p class="large">
                                Over 1,000 customers have made the decision to leave the car at home more often, most of them new to riding and carrying children.
                            </p>
                            <p class="large">
                                See what they have to say about the Tern GSD. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="_row _max_width_1600 three_col">             
                
                <div class="column_third ">
                  
      
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
        
                            <p class="normal">                   
                            For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It???s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                            </p>                  
                        </div>
                    </div>
      
                </div>
      
                <div class="column_third ">
                  
      
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
            
                            <p class="normal">                   
                            For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It???s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                            </p>                  
                        </div>
                  </div>
      
                </div>
      
                <div class="column_third ">
                  
      
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
        
                            <p class="normal">                   
                                For someone who has not ridden the bike for last twenty years, getting an e-bike was a game changer. It???s so easy to ride with both the kids on it. For us, this has ended the need of having second car or relying on the public transport. 
                            </p>                  
                        </div>
                    </div>
        
                </div>
    
            </div>        
    
        </section>
           
    </main>

<!--  end of template -->



<?php
get_footer();