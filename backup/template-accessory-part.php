<?php

	$full_stylesheet_dir_path = get_stylesheet_directory();
	$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
	$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];


	$url = "https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/bike"; 
		
	$res=doAPI($url);



	$accessoryName="Tern Captain's Chair";

	$description="The Captain’s Chair lets big kids and adults ride on the back of a GSD or HSD in comfort and style. Pair with the Sidekick Joyride Bars to create a complete passenger’s cabin for your favorite backseat driver. Use the same setup to carry crates and boxes—just remove the seat cushion.";
	$highresUrl="$child_theme_dir_file/img/accessories/LC_GSD_accessories_CAPTAINS_CHAIR.jpg";
	$display_price="4";

	if(!empty($_GET['id'])){
		foreach($res as $bike){
			
			$accessories=$bike->accessories;
			
			foreach($accessories as $accessory){
				$a_id=$accessory->Id;
				print "<!--    ....id=".$_GET['id']."       a_id=$a_id      -->";
				if($_GET['id']==$a_id){
					print "<!--   !!!!!!!!!!!!!!!!!!!! ....id=".$_GET['id']."        !!!!!!!!!!!!!!!!!!!!!!!!!!  -->";
					$pricing=$accessory->pricing;
					$stripeProductId=$accessory->stripeProductId;
					$thumbnailUrl=$accessory->thumbnailUrl;
					$layer=$accessory->layer;
					$highresUrl=$accessory->highresUrl;
					$Id=$accessory->Id;
					$description=$accessory->description;
					$configuratorUrl=$accessory->configuratorUrl;
					$accessoryType=$accessory->accessoryType;
					$accessoryName=$accessory->accessoryName;
					$accessoryFamily=$accessory->accessoryFamily;
					
					$accessoryCode=$accessory->accessoryCode;
					
					foreach($pricing as $price){
						if(($price->priceType=="Consumer") && ($price->interval=="week")){
							$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
						}
					}						
					
					
				}
			}
		}
	}


    global $post;
    $post_slug = $post->post_name;
	
	if($post_slug=="configure-your-bike"){
		$h_size="h3";
	} else {
		$h_size="h2";
	}


?>

    


        <section class="listing-single centered ">
            <!-- <div class=""> -->
            <div class="_row ">             
                
                <div class="column_60">
                    <div class="img_wrap">
                      <img class="cover" id="accessory_template_image" src="<?php echo $highresUrl ?>" loading="lazy"/>
                    </div>
                  </div>
                  
                  <div class="column_40 centered">
          
                    <div class="_wrap">
                      <div class="text_block left">
                        <<?php echo $h_size;?> class="blue" id="accessory_template_name"><?php echo $accessoryName; ?></<?php echo $h_size;?>>
                        <!-- <div class="large _regular"> -->
                          <h4 class="navy" id="accessory_template_price">
                            $<?php echo $display_price; ?> per week
                          </h4>
                          <p class="normal gray_800" id="accessory_template_description">
                            <?php echo $description; ?>
                          </p>

                        <!-- </div> -->
                        <div class="button_wrap_left">
          
                          <button class="button blue_btn getstarted">Get Started</button>
          
                        </div>            
                      </div>
                    </div>
          
                  </div>

            </div>      
        </section>

