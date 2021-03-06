<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

global $post;
$post_slug = $post->post_name;


?>


  <footer id="footer" class="footer">

    <div class="footer_row">            
      <div class="footer_cols_wrapper">

        <div class="footer_group_left">
                        <div class="footer_col_01">
                            <div class="footer_text_wrap">
                                <h6><a href="/why-subscribe">Why subscribe?</a></h6> 
                                <h6><a href="/family">Family</a></h6>
                                <h6><a href="/commuter">Commuter</a></h6>                 
                            </div>                        
                        </div>  
                        
                        

                        <div class="footer_col_02">
                            <div class="footer_text_wrap">
                                <h6>Products</h6>
                                <p>
                                    <a href="/tern-hsd" class="footer_link">Tern HSD</a>
                                </p>
                                <p>
                                    <a href="/tern-gsd" class="footer_link">Tern GSD</a>
                                </p>  
                                <p>
                                    <a href="/accessories" class="footer_link">Accessories</a>
                                </p>  
                            </div>                        
                        </div>

                        <div class="footer_col_03">
                            <div class="footer_text_wrap">
                                <h6>Information</h6>
                                <p>
                                    <a href="/terms-conditions">Terms & Conditions</a>
                                </p>
                                <p>
                                    <a href="/service" class="footer_link">Service</a>
                                </p>
                                <p>
                                    <a href="/lifestyle/" class="footer_link">+Lifestyle</a>
                                </p>                      
                              <!--  <p>
                                    <a href="" class="footer_link">Media</a>
                                </p>  -->
                                
                                
                            </div>                        
                        </div>

                        <div class="footer_col_04">
                            <div class="footer_text_wrap">
                                <h6>About</h6>
                                <p>
                                    <a href="/about" class="footer_link">About Us</a>
                                </p>
                                <p>
                                    <a href="/contact" class="footer_link">Contact</a>
                                </p>  
                                
                            </div>                        
                        </div>
                        
                        <!--<div class="footer_col_05">
                            <div class="footer_text_wrap">
                                <h6>Offers</h6>
                                <p>
                                    <a href="" class="footer_link">Commercial</a>
                                </p>
                                <p>
                                    <a href="" class="footer_link">Ride???N???Stride</a>
                                </p>  
                               
                            </div>                        
                        </div> -->
                    </div>

        <div class="footer_group_right">
          <div class="footer_col_08">
            <div class="footer_text_wrap">
              <h6>Acknowledgment</h6>
              <p>
                Lug+Carrie acknowledges the Traditional Owners of the lands on which we operate, and we pay our respects to their Elders past, present and future.
              </p>  
                      
            </div>                        
          </div>
        </div>
        
      </div>                
    </div>

    <div class="footer_credits_row">
      <div class="footer_logo">
          <a class="" href="/">
            <svg class="logo" width="172" height="34" viewBox="0 0 172 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g>
              <path class="rondel" d="M27.2353 14.1785H24.7803V16.6162H22.5457V14.1785H20.0907V11.9096H11.455V16.6162H8.10245V8.34415H20.0907V11.9096H22.5457V9.47191H24.7803V11.9096H27.2353V14.1785ZM8.10245 18.7331H11.4558C11.4775 20.1891 12.0712 21.5781 13.1086 22.6001C14.1459 23.622 15.5437 24.1949 16.9998 24.1949C18.456 24.1949 19.8537 23.622 20.8911 22.6001C21.9284 21.5781 22.5221 20.1891 22.5439 18.7331H25.8972V18.7789C25.8972 23.9624 22.0803 27.8569 17 27.8569C11.9193 27.8569 8.10245 23.9624 8.10245 18.7789V18.7331ZM34 17C34 13.6377 33.003 10.351 31.135 7.55532C29.267 4.75968 26.612 2.58075 23.5056 1.29406C20.3993 0.00736738 16.9812 -0.329291 13.6835 0.326657C10.3858 0.982606 7.35669 2.6017 4.97919 4.97919C2.6017 7.35669 0.982608 10.3858 0.326659 13.6835C-0.32929 16.9811 0.00736334 20.3993 1.29405 23.5056C2.58074 26.612 4.75968 29.267 7.55531 31.135C10.3509 33.003 13.6377 34 17 34C19.2325 34 21.4431 33.5603 23.5056 32.706C25.5682 31.8517 27.4423 30.5995 29.0209 29.0209C30.5995 27.4423 31.8517 25.5682 32.706 23.5056C33.5603 21.4431 34 19.2325 34 17Z" fill="#67CADD"/>
              <path class="type" d="M164.234 16.1777C165.632 16.1777 166.751 17.0677 167.158 18.5176H161.334C161.479 17.8557 161.845 17.2629 162.372 16.8374C162.899 16.412 163.556 16.1792 164.234 16.1777ZM171.101 19.8145C171.101 15.8724 168.176 12.973 164.284 12.973C160.342 12.973 157.366 15.8725 157.366 19.6875C157.366 23.6044 160.469 26.5547 164.59 26.5547C165.688 26.5745 166.777 26.3602 167.786 25.9261C168.794 25.4919 169.699 24.8479 170.439 24.0369L167.947 21.8749C167.544 22.3407 167.043 22.7121 166.481 22.9626C165.918 23.2132 165.307 23.3369 164.691 23.3248C163.955 23.36 163.228 23.1491 162.624 22.7254C162.021 22.3016 161.576 21.6892 161.359 20.9845H171.024C171.076 20.5967 171.101 20.2058 171.101 19.8145ZM151.847 26.2495H155.561V13.2782H151.847V26.2495ZM153.704 12.0574C154.128 12.0549 154.542 11.9271 154.893 11.69C155.245 11.4529 155.518 11.1171 155.679 10.7248C155.841 10.3326 155.882 9.90149 155.799 9.48573C155.715 9.06997 155.511 8.68814 155.211 8.38831C154.911 8.08847 154.53 7.88402 154.114 7.8007C153.698 7.71737 153.267 7.75889 152.875 7.92002C152.482 8.08116 152.147 8.35471 151.91 8.70626C151.672 9.0578 151.545 9.47162 151.542 9.89564C151.533 10.1819 151.583 10.4669 151.689 10.7332C151.794 10.9994 151.953 11.2412 152.156 11.4438C152.358 11.6463 152.6 11.8052 152.866 11.9107C153.133 12.0162 153.418 12.0661 153.704 12.0574ZM149.736 13.0747C149.063 13.0759 148.399 13.2272 147.792 13.5175C147.184 13.8079 146.65 14.2301 146.226 14.7534V13.2782H142.513V26.2495H146.226V20.1962C146.226 18.1868 147.473 16.8898 149.736 16.8898H150.296V13.0747H149.736ZM140.3 13.0747C139.627 13.0758 138.963 13.2271 138.356 13.5175C137.749 13.8079 137.214 14.2301 136.79 14.7534V13.2782H133.077V26.2495H136.79V20.1962C136.79 18.1868 138.037 16.8898 140.3 16.8898H140.86V13.0747H140.3ZM124.125 22.9687C123.49 22.9738 122.868 22.7902 122.337 22.4412C121.807 22.0922 121.392 21.5935 121.145 21.0083C120.899 20.4231 120.832 19.7779 120.952 19.1545C121.073 18.5311 121.376 17.9576 121.823 17.5068C122.27 17.056 122.841 16.7482 123.464 16.6224C124.086 16.4966 124.732 16.5585 125.319 16.8003C125.906 17.0421 126.408 17.4528 126.762 17.9804C127.115 18.508 127.304 19.1287 127.304 19.7637C127.318 20.1862 127.245 20.6071 127.091 21.0006C126.936 21.394 126.703 21.7518 126.406 22.052C126.108 22.3521 125.752 22.5882 125.36 22.7459C124.968 22.9035 124.547 22.9793 124.125 22.9687ZM127.304 13.2782V14.5755C126.794 14.0558 126.184 13.6457 125.511 13.3701C124.837 13.0946 124.114 12.9594 123.387 12.973C119.826 12.973 117.13 15.8981 117.13 19.7637C117.13 23.6296 119.826 26.5547 123.387 26.5547C124.114 26.5683 124.837 26.4331 125.511 26.1576C126.184 25.882 126.794 25.4719 127.304 24.9522V26.2495H131.017V13.2782H127.304ZM109.119 27.0959C110.636 27.1272 112.138 26.7839 113.491 26.0963C114.844 25.4087 116.007 24.398 116.876 23.1538L113.468 21.0426C112.984 21.7471 112.334 22.3219 111.576 22.7166C110.817 23.1113 109.974 23.3137 109.119 23.306C107.725 23.2926 106.392 22.7293 105.411 21.7387C104.43 20.7481 103.88 19.4102 103.88 18.0159C103.88 16.6217 104.43 15.2838 105.411 14.2932C106.392 13.3025 107.725 12.7393 109.119 12.7259C109.974 12.7182 110.817 12.9206 111.576 13.3153C112.334 13.7099 112.984 14.2848 113.468 14.9893L116.876 12.8781C116.007 11.6339 114.844 10.6232 113.491 9.9356C112.138 9.24799 110.636 8.90465 109.119 8.93601C103.829 8.93601 99.8354 12.8528 99.8354 18.0158C99.8354 23.179 103.829 27.0959 109.119 27.0959ZM96.5799 17.0677H92.9174V13.3799H89.5092V17.0677H85.8467V20.425H89.5092V24.1131H92.9174V20.425H96.5799V17.0677ZM76.4365 16.4829C76.8699 16.5023 77.2881 16.6486 77.6391 16.9036C77.9901 17.1587 78.2585 17.5111 78.4109 17.9173C78.5634 18.3235 78.5932 18.7656 78.4966 19.1885C78.4001 19.6115 78.1814 19.9968 77.8678 20.2966C77.5542 20.5965 77.1595 20.7976 76.7326 20.875C76.3057 20.9525 75.8655 20.9029 75.4665 20.7323C75.0676 20.5618 74.7275 20.2778 74.4885 19.9157C74.2495 19.5536 74.1222 19.1293 74.1222 18.6954C74.119 18.3953 74.1775 18.0977 74.294 17.8211C74.4106 17.5445 74.5826 17.2947 74.7996 17.0873C75.0165 16.8799 75.2738 16.7192 75.5553 16.6153C75.8369 16.5113 76.1368 16.4662 76.4365 16.4829ZM79.1581 26.1222H75.1139C74.4274 26.1222 73.944 25.7408 73.944 25.1557C73.9501 24.9544 74.0069 24.758 74.1092 24.5846C74.2115 24.4113 74.3559 24.2665 74.5291 24.1639C75.1496 24.339 75.7919 24.4246 76.4365 24.4183C79.9464 24.4183 82.5915 21.9766 82.5915 18.6954C82.5976 17.5311 82.2421 16.3936 81.5742 15.4399C81.6597 15.1906 81.8266 14.9773 82.0481 14.8343C82.2695 14.6913 82.5326 14.627 82.795 14.6516H83.7106V11.2182H82.6171C80.8368 11.2182 79.5394 12.1082 79.1581 13.5073C78.2941 13.1546 77.3698 12.9731 76.4365 12.973C72.9266 12.973 70.3071 15.4146 70.3071 18.6954C70.2997 19.4502 70.4471 20.1985 70.7401 20.894C71.0332 21.5896 71.4657 22.2177 72.011 22.7396C71.4556 23.1041 71.0012 23.6029 70.69 24.1898C70.3788 24.7767 70.2208 25.4327 70.2306 26.0969C70.2306 28.259 71.884 29.7085 74.4018 29.7085H78.446C79.4886 29.7085 80.2007 30.2681 80.3025 31.1072L84.1176 30.0646C83.6345 27.5721 81.7776 26.1222 79.1581 26.1222ZM62.4734 26.5547C66.1868 26.5547 68.6028 24.3674 68.6028 21.061V13.2782H64.8895V20.5523C64.89 20.87 64.8279 21.1846 64.7068 21.4782C64.5856 21.7719 64.4077 22.0387 64.1833 22.2635C63.9588 22.4883 63.6923 22.6667 63.3989 22.7884C63.1054 22.9101 62.7909 22.9727 62.4733 22.9727C62.1556 22.9727 61.8411 22.9101 61.5476 22.7884C61.2542 22.6667 60.9877 22.4883 60.7632 22.2635C60.5388 22.0387 60.3609 21.7719 60.2398 21.4782C60.1186 21.1846 60.0565 20.87 60.057 20.5523V13.2782H56.3437V21.061C56.3437 24.3674 58.7853 26.5547 62.4734 26.5547ZM47.8743 22.5362V8.70007H43.9319V26.2495H55.1993V22.5362H47.8743Z" fill="#67CADD"/>
              </g>
            </svg>       
          </a>
      </div>

      <div class="footer_signoff_wrap">

        <div class="footer_social">
          <a class="footer_social_link" href="#facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="8.505" height="18.613" viewBox="0 0 8.505 18.613"><title>Facebook</title>
              <path id="facebook" d="M1.969.705a8.943,8.943,0,0,0-2.538.654c-.326.194-.2,1.14-.306,1.906h3c-.114,1.34-.215,2.525-.326,3.825H-1.034v9.236H-4.514V7.16l-1.87-.135V3.36l1.531-.115c.089-1.76-.133-3.677,1.622-4.836,1.594-1.052,3.388-.563,5.2-.683Z" transform="translate(6.384 2.286)" fill="#ffffff"/>
            </svg>
          </a>
          <a class="footer_social_link" href="#instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.583" height="18.613" viewBox="0 0 18.583 18.613"><title>Instagram</title>
                <path id="Instagram"  d="M4.376,2.194c0,1.833.034,3.668-.009,5.5-.056,2.4-1.3,3.717-3.689,3.761q-5.615.1-11.233-.01A3.346,3.346,0,0,1-14.139,7.82q-.088-5.615,0-11.233a3.357,3.357,0,0,1,3.579-3.639q5.672-.114,11.348,0c2.308.048,3.535,1.4,3.59,3.746.043,1.832.009,3.666.009,5.5H4.376M-12.5.343c0,2.58-.039,5.036.018,7.49a1.772,1.772,0,0,0,1.8,1.93c3.867.047,7.732.038,11.6.007a1.579,1.579,0,0,0,1.7-1.477c.092-2.633.033-5.271.033-7.946H-.063C.563,2.865.084,5.005-2.13,6.455a4.759,4.759,0,0,1-5.422.059C-9.837,5.081-10.337,2.908-9.719.343Zm7.627,5.133A3.34,3.34,0,0,0-1.6,2.184,3.341,3.341,0,0,0-4.9-1.1,3.324,3.324,0,0,0-8.159,2.208,3.3,3.3,0,0,0-4.873,5.476m7.06-10.4H-.791v3.058H2.188Zm0,3.058" transform="translate(14.185 7.111)" fill="#ffffff"/>
            </svg>            
          </a>
          <a class="footer_social_link" href="#linkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.582" height="18.61176" viewBox="0 0 18.582 18.61176"><title>LinkedIn</title>
                <path id="LinkedIn" d="M320.65951,138.07959c0-1.836.022-3.534-.009-5.233a16.353,16.353,0,0,0-.216-2.425,1.78,1.78,0,0,0-1.95465-1.58624l-.02035.00224a1.857,1.857,0,0,0-2.062,1.508,13.59927,13.59927,0,0,0-.238,2.418c-.034,1.708-.011,3.416-.011,5.224h-3.454v-12.136h3.173c.027.453.054.895.092,1.554a4.787,4.787,0,0,1,4.522-1.595,3.527,3.527,0,0,1,3.584,3.444c.156,2.673.15,5.357.162,8.035,0,.263-.351.735-.569.754-.954.084-1.92.037-3,.037m-14.976-12.259h4.19a7.91391,7.91391,0,0,1,.11.922c.008,3.452-.013,6.9.02,10.357.008.745-.2,1-.981,1.018-3.331.067-3.334.092-3.339-3.22v-9.077m4.29-4.176a2.27,2.27,0,0,1-2.142,2.2,2.223,2.223,0,0,1-2.185-2.135,2.25,2.25,0,0,1,2.141-2.187,2.207,2.207,0,0,1,2.186,2.122" transform="translate(-305.64551 -119.52359)" fill="#ffffff"/>
            </svg>          
          </a>
          <a class="footer_social_link" href="#twitter">              
            <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg"><title>Twiter</title>
              <path id="Twitter" d="M21.5156 9.125C22.4531 8.42188 23.2969 7.57812 23.9531 6.59375C23.1094 6.96875 22.125 7.25 21.1406 7.34375C22.1719 6.73438 22.9219 5.79688 23.2969 4.625C22.3594 5.1875 21.2812 5.60938 20.2031 5.84375C19.2656 4.85938 18 4.29688 16.5938 4.29688C13.875 4.29688 11.6719 6.5 11.6719 9.21875C11.6719 9.59375 11.7188 9.96875 11.8125 10.3438C7.73438 10.1094 4.07812 8.14062 1.64062 5.1875C1.21875 5.89062 0.984375 6.73438 0.984375 7.67188C0.984375 9.35938 1.82812 10.8594 3.1875 11.75C2.39062 11.7031 1.59375 11.5156 0.9375 11.1406V11.1875C0.9375 13.5781 2.625 15.5469 4.875 16.0156C4.5 16.1094 4.03125 16.2031 3.60938 16.2031C3.28125 16.2031 3 16.1562 2.67188 16.1094C3.28125 18.0781 5.10938 19.4844 7.26562 19.5312C5.57812 20.8438 3.46875 21.6406 1.17188 21.6406C0.75 21.6406 0.375 21.5938 0 21.5469C2.15625 22.9531 4.73438 23.75 7.54688 23.75C16.5938 23.75 21.5156 16.2969 21.5156 9.78125C21.5156 9.54688 21.5156 9.35938 21.5156 9.125Z" fill="white"/>
            </svg>
                        
          </a>
        </div>          

        <div class="footer_credit">                        
            <span>?? Lug+Carrie 2022</span>  <span><a href="/privacy/">PRIVACY POLICY</a></span>
        </div>

      </div>
        
    </div>

  </footer>
  
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
  </script>

  <script src="<?php echo $child_theme_dir_file; ?>/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/plugins.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/main.js"></script>

  <script src="<?php echo $child_theme_dir_file; ?>/js/add_class_onscroll.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/add_class_checked.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/video_control.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/lazyLoad_video.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/active_tabs.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/getstarted_add_active.js"></script>
  
  <script src="<?php echo $child_theme_dir_file; ?>/js/faqs.js"></script>
  <script src="<?php echo $child_theme_dir_file; ?>/js/configure_your_bike.js"></script>

	<?php
	
	if($post_slug=="general"){
		?>
		<script src="<?php echo $child_theme_dir_file; ?>/js/maps/delivery.js"></script>
		<script src="<?php echo $child_theme_dir_file; ?>/js/maps/custom_maps.js"></script>
		<script src="<?php echo $child_theme_dir_file; ?>/js/maps/custom_maps_syd.js"></script>
		<?php
	}
	
	
	
	wp_footer();
	
	
	?>
	<div id="video_modal_outer" style="display:none;">
		<div class="close" onclick="close_video_modal();">X</div>
		<div id="video_modal"></div>
	</div>

	<script>
	//TODO Move this one
	function video_modal(x){
		if(x=='home'){
			// add required content to modal inner div 
			var HTML='<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/709363830?h=a9faa884cd&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Master"></iframe></div><script src="https://player.vimeo.com/api/player.js"><\/script>';
			jQuery("#video_modal").html(HTML);			
		}
		if(x=='subscribe'){
			
			// add required content to modal inner div 
			var HTML='<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/712687404?h=367a83014d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Subscription - 30 sec"></iframe></div><script src="https://player.vimeo.com/api/player.js"><\/script>';
			jQuery("#video_modal").html(HTML);			
		}
		if(x=='family'){
			// add required content to modal inner div 
			var HTML='<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/712687310?h=f822326454&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Family - 30 sec.mp4"></iframe></div><script src="https://player.vimeo.com/api/player.js"><\/script>';
			jQuery("#video_modal").html(HTML);			
		}
		if(x=='commuter'){
			// add required content to modal inner div 
			var HTML='<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/712687167?h=671a8bee45&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lug &amp;amp; Carrie - Commuter - 30 sec"></iframe></div><script src="https://player.vimeo.com/api/player.js"><\/script>';
			jQuery("#video_modal").html(HTML);			
		}
			// show outer modals div
			jQuery("#video_modal_outer").show();
	}
	function close_video_modal(){
		// clear the video modals content 
		jQuery("#video_modal").html("");
		// hide outer modal div 
		jQuery("#video_modal_outer").hide();
	}
	
	</script>

  <!-- https://flickity.metafizzy.co/ -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!-- <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script> -->
</body>

</html>
