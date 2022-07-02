<?php
/**
 * The template for displaying the about page.
 *
 * Template name: Contact General Page
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>


<!-- Begin template -->

    <main>

        <section class="hero bg_cover centered">
        <!-- autoplay -->
        <!-- <video  muted loop id="backgroundVideo">
            <source src="./video/rain.mp4" type="video/mp4">
        </video> -->

        <!-- <div class="overlay"></div> -->
        <!-- <div class=""> -->
            <div class="_row">        
                <div class="column_60 ">

                    <div class="_wrap">
                        <div class="text_block center">
                            <h1>Customer Service Information</h1>
                            <div class="large _regular">
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

        <section class=" intro_sect centered ">
            <!-- <div class=""> --> 
            <div class="_row ">             
                <div class="column_60">

                    <div class="_wrap">

                        <div class="_group">
                            <div class="_delivery">
                                
                                <!--  -->
                                <div>
                                    <h3 class="">Delivery Areas</h3>
                                </div>

                                <div class="_item">
                                    
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut fringilla turpis, id pulvinar nisi. Aliquam non nulla lobortis, tincidunt enim dignissim, molestie lacus. Nam consectetur enim ut sem hendrerit finibus. Nulla facilisis feugiat mi, ac accumsan nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ullamcorper pharetra augue, et sodales orci viverra sed. Nullam congue ipsum quis mi tincidunt, vitae sagittis justo aliquet. Pellentesque nisi ex, aliquet vitae velit a, commodo dapibus arcu. Vivamus at nibh id sem ullamcorper accumsan. Vestibulum venenatis hendrerit augue, eget maximus nisi pretium quis.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>      
        </section>

        <section class="map_sect centered ">
            <!-- <div class=""> --> 
                <div class="column_wrap column_row">

                    <div class="column_50 ">
                        <div id="map" class=""></div>

                        <div class="_wrap">
                            <div class="_group _x2-padding centered">
                                <div class="location column_40">                                    
                                    <!--  -->
                                    <div class="_subject">
                                        <h3 class="">Melbourne</h3>
                                    </div>
                                    <div class="_item">                                        
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut fringilla turpis, id pulvinar nisi. Aliquam non nulla lobortis, tincidunt enim dignissim, molestie lacus.  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column_50">

                        <div id="map_syd" class=""></div>

                        <div class="_wrap">
                            <div class="_group _x2-padding centered">
                                <div class="location column_40 ">                                    
                                    <!--  -->
                                    <div class="_subject">
                                        <h3 class="">Sydney</h3>
                                    </div>    
                                    <div class="_item">                                        
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut fringilla turpis, id pulvinar nisi. Aliquam non nulla lobortis, tincidunt enim dignissim, molestie lacus.  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
        </section>
 
        <section class="_consultation centered gray_100_bg ">
            <!-- <div class=""> -->
              <div class="_row _no-margin">   
                <!-- <div class="column_10"></div>      -->
                <div class="column_40 centered">
      
                  <div class="_wrap">
                    <div class="text_block center">
                      <h3 class="navy">Book a consultation</h3>
                      <!-- <div class="large _regular"> -->
                        <p class="normal navy">
                            Thanks for your interest in Lug+Carrie! 
                        </p>
                        <p class="normal navy">
                            This is a no-obligation call where you can find out more about our subscription, ask questions about electric bikes, or discuss a set up that would work best for you. You can even sign-up if you’re ready.
                        </p>
                        <p class="normal navy">                            
                            All you need to do is provide a few contact details, pick the time that works best for you, and we’ll be in touch.                            
                        </p>
                        
                        <!-- </div> -->
                        <div class="button_wrap_center_vert">
        
                        <button id="getstarted" class="button blue_btn getstarted">Book a consultation</button>
        
                        </div>            
                    </div>
                </div>
    
            </div>
            
                <div class="column_60">
                    <div class="img_wrap">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/placeholder.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>        
    
        <!-- </div> -->
        </section>
        
        <section class="_consultation centered   ">
            <!-- <div class=""> -->
              <div class="_row _no-margin">   
                <!-- <div class="column_10"></div>      -->
                <div class="column_40 centered">
      
                  <div class="_wrap">
                    <div class="text_block center">
                      <h3 class="navy">Book a test ride</h3>
                      <!-- <div class="large _regular"> -->
                        <p class="normal">                                                        
                            There's no better way to get a feel for our Lug+Carrie bikes than to ride one!
                        </p>
                        <p class="normal">                            
                            Our test rides include a short consultation to get you set up on the perfect bike, then we make sure you and your kidsare comfortable before you set off. 
                        </p>
                        <p class="normal">                            
                            Simply provide a few contact details, select your location, then pick the time that works best for you.
                        </p>
                        <p class="normal">                            
                            We’ll have the bike ready for you when you arrive, just don't forget to bring a helmet if you've got one!
                        </p>
                        <!-- </div> -->
                        <div class="button_wrap_center_vert">        
                            <button id="getstarted" class="button blue_btn getstarted">Book Now</button>        
                        </div>            
                    </div>
                </div>
    
            </div>
            
                <div class="column_60">
                    <div class="img_wrap">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/placeholder.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>        
    
        <!-- </div> -->
        </section> 
        
        <section class="_consultation centered gray_100_bg">
            <!-- <div class=""> -->
              <div class="_row _no-margin">   
                <!-- <div class="column_10"></div>      -->
                <div class="column_40 centered">
      
                  <div class="_wrap">
                    <div class="text_block">
                      <h3 class="navy center">Self Checkout</h3>
                      <!-- <div class="large _regular"> -->                        
                        <p class="normal center">                            
                            Do you love the bike you’ve created for yourself? Are you ready to discover Daily Life. Done Better?
                        </p>
                        <p class="normal center">                            
                            Let’s get  started today! 
                        </p>
                        <p class="normal center">                            
                            You can complete your Lug+Carrie application online, by providing us with some contact information. 
                        </p>
                        <p class="normal">                                                        
                            Then;
                        </p>
                        
                        <ol class="left centered">
                            <li>We’ll review your application</li>
                            <li>You’ll pay a deposit</li>
                            <li>Book a delivery date</li>
                            <li>45 minute handover experience and orientation</li>
                            <li>Ride into the sunset</li>
                        </ol>

                        <p class="normal">                                                                                    
                            Our review typically takes a day to complete. 
                        </p>
                        <p class="normal">                            
                            Ready?
                        </p>
                        <!-- </div> -->
                        <div class="button_wrap_center_vert">        
                            <button id="getstarted" class="button blue_btn getstarted">Ready</button>
                        </div>            
                    </div>
                </div>
    
            </div>
            
                <div class="column_60">
                    <div class="img_wrap">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/placeholder.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>        
    
        <!-- </div> -->
        </section>

        <section class="_consultation centered  ">
            <!-- <div class=""> -->
              <div class="_row _no-margin">   
                <!-- <div class="column_10"></div>      -->
                <div class="column_40 centered">
      
                  <div class="_wrap">
                    <div class="text_block center">
                      <h3 class="navy">Email My Configuration</h3>
                      <!-- <div class="large _regular"> -->
                        <p class="normal">
                             Do you love the bike you’ve created and want to share it with others? Or just want to think about things for a bit?
                        </p>
                        <p class="normal">    
                            Provide a few contact details, and we’ll email your configuration to you.  
                        </p>
                        <!-- </div> -->
                        <div class="button_wrap_center_vert">
        
                        <button id="getstarted" class="button blue_btn getstarted">Email My Configuration</button>
        
                        </div>            
                    </div>
                </div>
    
            </div>
            
                <div class="column_60">
                    <div class="img_wrap">
                    <img class="cover" src="<?php echo $child_theme_dir_file; ?>/img/placeholder.jpg" loading="lazy"/>
                    </div>
                </div>
            </div>        
    
        <!-- </div> -->
        </section>    
                               
        <section class=" _example_sect _x2-padding centered gray_100_bg">
            <div class="_row "> 
                            
                <div class="column_60">
                
                <h3 class="navy">Some more elements</h3>
                </div>
            </div>
            <div class="_row "> 
                            
                    <div class="column_60">

                    <div class="_wrap">

                        <div class="_group">

                            


                            <div class="display_table">
                                <p><strong>Table Details</strong>.</p>

                                <p>Lorem Ipsum.</p>

                                <div class="_panel center white_bg">
                                    <div class="table" id="table">
                                        <div class='theader'>
                                        <div class='table_header'>Item</div>
                                        <div class='table_header'>Name</div>
                                        <div class='table_header'>GSD</div>
                                        </div>
                                        <div class='table_row'>
                                        <div class='table_small'>
                                            <div class='table_cell'>Item</div>
                                            <div class='table_cell'>Row 1.</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Name</div>
                                            <div class='table_cell'>Name Col Row 1</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Detail</div>
                                            <div class='table_cell'>
                                                <div class="_group">
                                                    Details<br>
                                                    details
                                                </div>
                                            </div>
                                        </div>                                                  
                                        </div>

                                        <div class='table_row'>
                                            <div class='table_small'>
                                            <div class='table_cell'>Item</div>
                                            <div class='table_cell'>Row 2.</div>
                                        </div>
                                        <div class='table_small'>
                                            <div class='table_cell'>Name</div>
                                            <div class='table_cell'>Name Col Row 2</div>
                                            </div>
                                            <div class='table_small'>
                                            <div class='table_cell'>Detail</div>
                                            <div class='table_cell'>
                                                <div class="_group">
                                                    Details<br>
                                                    details
                                                </div>
                                            </div>
                                            </div>                                                  
                                        </div>                                        
                                        
                                    </div>

                                    <div>to be completed...</div>


                                </div>                                        

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="accordian_sect centered ">
            <!-- <div class=""> --> 
            <div class="_row ">             
                <div class="column_60">

                    <div class="_wrap">

                        <div class="_group">
                            <div class="faqs">
                                
                                <!--  -->
                                <div>
                                    <h3 class="navy">Level Three Heading</h3>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Question Number One?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut fringilla turpis, id pulvinar nisi. Aliquam non nulla lobortis, tincidunt enim dignissim, molestie lacus. Nam consectetur enim ut sem hendrerit finibus. Nulla facilisis feugiat mi, ac accumsan nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ullamcorper pharetra augue, et sodales orci viverra sed. Nullam congue ipsum quis mi tincidunt, vitae sagittis justo aliquet. Pellentesque nisi ex, aliquet vitae velit a, commodo dapibus arcu. Vivamus at nibh id sem ullamcorper accumsan. Vestibulum venenatis hendrerit augue, eget maximus nisi pretium quis.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Question Number Two?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Sed placerat velit sed tincidunt sodales. Proin sed justo bibendum, tempor nisi ut, scelerisque metus. Donec porttitor quam quis neque ornare dapibus. Mauris in dolor at nunc euismod euismod. Nunc suscipit magna magna, a faucibus neque facilisis a. Curabitur varius ex at ultrices dictum. Maecenas finibus sed dolor non vestibulum. Maecenas hendrerit lectus vitae finibus pharetra. Morbi quis odio luctus, pellentesque est non, luctus est. Vivamus ornare ornare libero. Donec euismod tortor vitae ligula volutpat, vitae tempor lorem gravida. Nullam nec sapien libero.
                                        </p>
                                    </div>
                                </div>

                                

                                <!--  -->
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