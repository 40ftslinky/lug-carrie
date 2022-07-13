<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Configure Your Bike Template
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); 

$url = "https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/bike"; 

$results = doAPI($url);


$url="https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/compatibility";
$compatibility = doAPI($url);

$url="https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/preconfiguration";
$preconfigs = doAPI($url);

$url="https://dev-stripepayment.aus22s.sfdc-vwfla6.force.com/services/apexrest/api/v1/combo";
$combos = doAPI($url);

$get = $_GET['a'];



$get_ids =explode("-",$get);







// TODO remove deubugging below after dev...
print "<!-- ";



print "   \n\n\n  results  ";
print_r($results);
print " \n\n \n";




print "   \n\n\n  combos   ";
print_r($combos);
print " \n\n \n";







print " -->";
?>
	<script>
	<?php
	
	
	
	
$X=0;
	print "var accessories= new Array();";
	print "\n";
	foreach($results as $r){
		$p_name = $r->name;
		$p_bikeId = $r->bikeId;
		$accessories=$r->accessories;
		
		foreach($accessories as $accessory){
			
			////print "\n";
			//print "accessories[$X][0]='$p_bikeId';";
			////print "\n";
			////print "/* ";
			/////print_r($accessory);
			////print " */";
			$Id=$accessory->Id;
			$accessoryName=$accessory->accessoryName;
			$accessoryName= str_replace("'", "\'",$accessoryName);
			
			$accessoryFamily=$accessory->accessoryFamily;
			$accessoryCode=$accessory->accessoryCode;
			$highresUrl=$accessory->highresUrl;
			$description=$accessory->description;
			
			$description= str_replace("'", "\'",$description);
			
			$description = str_replace(array("\r\n", "\r", "\n"), "<br />", $description);
			
			$pricing=$accessory->pricing;	
			$display_price=0;
			$priceType="Consumer";
			foreach($pricing as $price){
				if(($price->priceType=="Consumer") && ($price->interval=="week")){
					$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
					$priceType="Consumer";
				}
				if($price->priceType=="One Off Purchase" && $display_price==0){
					$display_price = $price->amount;
					$priceType="One Off Purchase";
				}
			}

			print "\n";
			print "accessories['$Id']=new Array();";
			print "\n";
			print "accessories['$Id']['id']='$Id';";
			print "\n";
			print "accessories['$Id']['accessoryName']='$accessoryName';";
			print "\n";
			print "accessories['$Id']['accessoryFamily']='$accessoryFamily';";
			print "\n";
			print "accessories['$Id']['description']='$description';";
			print "\n";
			print "accessories['$Id']['display_price']='$display_price';";
			print "\n";
			print "accessories['$Id']['priceType']='$priceType';";
			print "\n";
			print "accessories['$Id']['highresUrl']='$highresUrl';";
			print "\n";


			$display_price=0;
			$X++;
		}
		print "\n";
		
	
	//$AJS='';	
	
	?>
	var doubles=['01t5g000003NtmYAAS','01t5g000003NtmaAAC'];
	<?php
		
	print "var required= {};";
	$REQ = array();
	$j=0;
	foreach($compatibility as $k=>$c){
		
		
		if($c->required=="1"){
			
				$a1id = $c->accessory1Id;
				$a2id = $c->accessory2Id;
				//TODO check 01t5g000003NtmWAAS
				if($a1id!="01t5g000003NtmWAAS"){
					if(!isset($REQ[$a1id])){
						$REQ[$a1id]=array();
						print "\n";
						print "required['$a1id']= {}";
						print "\n";
					}
					$REQ[$a1id][]=$a2id;
					print "required['$a1id'][$j]='$a2id';";
					$j++;
					print "\n";
				} else {
					/* is this necessary?  .... TODO */
					if(!isset($REQ[$a2id])){
						$REQ[$a2id]=array();
						print "\n";
						print "required['$a2id']={}";
						print "\n";
					}
					$REQ[$a2id][]=$a1id;
					print "required['$a2id'][$j]='$a1id';";
					$j++;
					print "\n";
					/* end if necessary ? ....  TODO */
				}
		}
		
		
	}		
		
		
	}	
	print "\n";

	
	?>
	</script>
	
	<script>
	<?php
	$X=0;
	print "var preconfigs= new Array();";
	foreach($preconfigs as $pref){
		$p_name = $pref->name;
		$p_products = $pref->products;
		$p_bikeId = $pref->bikeId;
		$Y=1;
		print "preconfigs[$X]=new Array();";
		print "\n";
		print "preconfigs[$X][0]='$p_bikeId';";
		print "\n";
		foreach($p_products as $prod){
			$P_ID = $prod->productId;
			print "preconfigs[$X][$Y]='$P_ID';";
			print "\n";
			$Y++;
		}
		$X++;
	}
	
	?>
	
	
	<?php
	$X=0;
	print "var combos= new Array();";
	print "\n";
	print "var combos_img= new Array();";
	foreach($combos as $combo){
		$p_name = $combo->name;
		$p_products = $combo->products;
		$p_bikeId = $combo->bikeId;
		$configuratorUrl = $combo->configuratorUrl;
		//$p_bikeName = $combo->bikeName;
		//pref
		$Y=1;
		print "\n";
		print "combos_img[$X]='$configuratorUrl';";
		print "\n";
		print "combos[$X]=new Array();";
		print "\n";
		print "combos[$X][0]='$p_bikeId';";
		print "\n";
		foreach($p_products as $prod){
			$P_ID = $prod->productId;
			print "combos[$X][$Y]='$P_ID';";
			print "\n";
			$Y++;
		}
		$X++;
	}
	
	?>	
	
	
	</script>
	
	<script>
	<?php	
	
	$X=0;
	print "\n";
	print "var compatibility= new Array();";
	print "\n";
	foreach($compatibility as $c){
		$required = $c->required;
		$qty = $c->qty;
		$compatible = $c->compatible;
		$accessory1Id = $c->accessory1Id;	
		$accessory1Name = $c->accessory1Name;	
		$accessory2Id = $c->accessory2Id;	
		$accessory2Name = $c->accessory2Name;	
		print "\n";
		print "compatibility[$X]=new Array();";
		print "\n";
		print "compatibility[$X]['required']='$required';";
		print "\n";
		print "compatibility[$X]['qty']='$qty';";
		print "\n";
		print "compatibility[$X]['compatible']='$compatible';";
		print "\n";
		print "compatibility[$X]['accessory1Id']='$accessory1Id';";
		print "\n";
		//print "compatibility[$X]['accessory1Name']=\"$accessory1Name\";";
		//print "\n";
		print "compatibility[$X]['accessory2Id']='$accessory2Id';";
		print "\n";
		//print "compatibility[$X]['accessory2Name']=\"$accessory2Name\";";
		//print "\n";
		print "\n";
		
		
		$X++;
	}
	

	



	$ignore_bikes = array('01t5g000003NtmTAAS','01t5g000003NtmSAAS');



	?>
	
	

	
	</script>
	<script>
		function bike_type(family){
			jQuery('.bike_family_checkbox_wrapper input').prop('checked',false);
			jQuery('.configure_sect .select_checkbox_ input[value='+family+']').prop('checked',true);
			//jQuery('.'+family+'_family_checkbox_wrapper').click();
			bike_select_change(family);
			console.log(family);
			
	}
	
	</script>
	<?php
	$type="";
	if(isset($_GET['type'])){
		$type = strtolower($_GET['type']);
		// if type is sent in querystring call JS onload to activate filter function
		print "<script>jQuery(document).ready(function() {bike_type('".$_GET['type']."');});</script>";
	}
	?>	

	
  <main>
    <section class="configure_sect">
      
        <div class="fullwidth_row  ">        
            <div class="fullwidth_col_left">

                <div class="_wrap">
					<!-- img loop -->
					<?php
					$A=0;
					
					$file_path = 'Log___Missing_Images.txt';
					$missing_images  = file_put_contents($file_path, "----------------------------------------------------------------------------------".PHP_EOL);				
					
					foreach($results as $bike){
						$Id=$bike->Id;
						$bike_id =$bike->Id;
						$bikeFamily=$bike->bikeFamily;
						$bikeName=$bike->bikeName;	
						$accessories=$bike->accessories;
						
						
						if($bikeFamily=="HSD"){
							//$style_display="display:block";
							$img_default = "/img/configure/hsd/HSD_Base.jpg"; //TODO Change this 
						} else {
							//$style_display="display:none";
							$img_default = "/img/configure/gsd/GSD_Base.jpg"; //TODO Change this 
						}
					if(!in_array($Id,$ignore_bikes)){	
					?>
					<!-- .start bike img  <?php echo $A; echo "  :  $bikeName : $bikeFamily  "; ?>    -->
                    <div class="config_img_block center img_block_<?php echo strtolower($bikeFamily); ?> bike_<?php echo $Id; ?>"  id="img_block_<?php echo $Id; ?>">
							<!-- base img. -->
                        <picture class="<?php echo strtolower($bikeFamily); ?>_base_img base_img">
                            <source 
                                media="(min-width: 800px)" 
                                srcset="<?php echo $child_theme_dir_file; ?><?php echo $img_default; ?>, 
                                        <?php echo $child_theme_dir_file; ?><?php echo $img_default; ?>" >
                            <img src="<?php echo $child_theme_dir_file; ?><?php echo $img_default; ?>" >
                        </picture>
						<!-- end base img. -->
						
						
					<!--  combos loop start -->
						<?php

						
						foreach($combos as $key=> $combo){
							
							$p_name = $combo->name;
							$p_products = $combo->products;
							$p_bikeId = $combo->bikeId;
							$configuratorUrl = $combo->configuratorUrl;
							$Id = $key;
							

						?>
						<!-- combo start. -->
                        <picture class="accessory_pic combo_img  combo_<?php echo $Id; ?>" id="<?php echo $Id; ?>" style="opacity:0; z-index:1;">
                            <source 
                                media="(min-width: 800px)" 
                                srcset="<?php echo $configuratorUrl; ?>,
                                        <?php echo $configuratorUrl; ?>" >
                            <img src="<?php echo $configuratorUrl; ?>" loading="lazy">
                        </picture><!-- combo  end. -->
						<?php
						} 
						?>
						<!-- end combos loop. -->
						
						
						
						
						
						
						
						
						
						

						<!-- accessory loop start -->
						<?php

						
						foreach($accessories as $accessory){
							
							$Id=$accessory->Id;
							$pricing=$accessory->pricing;
							$display_price=0;
							/*
							foreach($pricing as $price){
								if(($price->priceType=="Consumer") && ($price->interval=="week")){
									$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
								}
							}									
						*/
							$thumbnailUrl=$accessory->thumbnailUrl;
							$highresUrl=$accessory->highresUrl;
							$configuratorUrl=$accessory->configuratorUrl;
							$accessoryFamily=$accessory->accessoryFamily;
							$accessoryType=$accessory->accessoryType;
							$accessoryName=$accessory->accessoryName;
							
							
							$description=$accessory->description;
							$layer=$accessory->layer;
							if(!empty($layer)){$layer_style="z-index: $layer;";} else {$layer_style="zindex:0";}
							
							
							
							
							if(empty($highresUrl)){
								$return = "$bikeFamily : $bikeName: $accessoryFamily : $accessoryName ($Id) : MISSING: high res image ";
								$missing_images  = file_put_contents($file_path, "".$return.PHP_EOL , FILE_APPEND | LOCK_EX);
							}
							if(empty($thumbnailUrl)){
								$return = "$bikeFamily : $bikeName: $accessoryFamily : $accessoryName ($Id) : MISSING: thumbnail image ";
								$missing_images  = file_put_contents($file_path, "".$return.PHP_EOL , FILE_APPEND | LOCK_EX);
							}
							if(empty($configuratorUrl)){
								$return = "$bikeFamily : $bikeName: $accessoryFamily : $accessoryName ($Id) : MISSING: configurator image";
								$missing_images  = file_put_contents($file_path, "".$return.PHP_EOL , FILE_APPEND | LOCK_EX);
							}							
							

						?>
						<!-- accessory start. -->
                        <picture class="accessory_pic accessory_<?php echo $Id; ?> <?php echo $Id; ?>" id="<?php echo $Id; ?>" style="opacity:0; <?php echo $layer_style; ?>">
                            <source 
                                media="(min-width: 800px)" 
                                srcset="<?php echo $configuratorUrl; ?>,
                                        <?php echo $configuratorUrl; ?>" >
                            <img src="<?php echo $configuratorUrl; ?>" loading="lazy">
                        </picture><!-- accessory end. -->
						<?php
						} 
						?>
						<!-- end accessories loop. -->

                       <!-- <picture class="hsd_captains_chair_img" id="HSD_Captains_Chair"  style="opacity:0;">
                            <source 
                                media="(min-width: 800px)" 
                                srcset="<?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_Captains_Chair.png, 
                                        <?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_Captains_Chair.png" >
                            <img src="<?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_Captains_Chair.png" loading="lazy">
                        </picture> 
                        
                        <picture class="HSD_37_Panier_Child_Seat_img" id="HSD_37_Panier_Child_Seat"  style="opacity:0;">
                            <source 
                                media="(min-width: 800px)" 
                                srcset="<?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_37_Panier_Child_Seat.png, 
                                        <?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_37_Panier_Child_Seat.png" >
                            <img src="<?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_37_Panier_Child_Seat.png" loading="lazy">
                        </picture> 
						-->
                    </div>
					<!-- end bike img -->
					<?php
					}
					
					$A++;
					//}	
					}
					?>
					<!-- end bike img loop -->
                </div>

            </div>
        


            <div class="selection fullwidth_col_right">

                <div class="col_right_wrap" id="col_right_wrap_Bikes">
                    <div class="progress_timeline">
                        <ol class="progress_list">
                            <li class="current">Bikes</li>
                            <li>Passenger</li>
                            <li>Cargo</li>
                            <li>Purchase</li>
								<li>Order</li>
                        </ol>
                    </div>
						<script>

						</script>
                    <div class="progress_intro">
						Build a bike to suit your lifestyle, share the build with someone, or book a test ride on that exact bike! 
                    </div>


                    <form class="select_checkbox_">
                        <fieldset class="checkbox-group">

                            
                            <div class=" tabs bike_select">
                                
                                <div class="tab-item bike_title _hsd active">
                                    Tern HSD
                                </div>
                                <div class="tab-item bike_title _gsd">
                                    Tern GSD
                                </div>
                                
                            </div>

                            <div class="bikes_checkbox active">
                                <div class="checkbox lrg">
                                    <label class="checkbox-wrapper bike_family_checkbox_wrapper hsd_family_checkbox_wrapper">
                                        <input type="checkbox" class="checkbox-input configurator_checkbox bike_family_checkbox" name="01t5g000003NtmiAAC"  value="hsd" data="44" checked /><!-- TODO  fix price dynamic  -->
                                        <div class="checkbox-tile ">
                                            <div class="checkbox-thumb">
														
                                                <img src="<?php echo $child_theme_dir_file; ?>/img/configure/hsd/HSD_Base_sm.jpg" /><!-- TODO  fix , make image  dynamic   -->
                                            </div>  
													<div class="checkbox-label">
														<div class="product-head">
															<?php $display_price=44; $Id="01t5g000003NtmiAAC"; ?>
															<div class="product-price">$<?php echo $display_price; ?><span>/week</span></div>
														</div>
													</div>
                                        </div>
                                    </label>
									        
											<input type=hidden name="price_<?php echo $Id; ?>" value="<?php echo $display_price; ?>" />
                                </div>    

									
                                <div class="checkbox lrg">
                                    <label class="checkbox-wrapper bike_family_checkbox_wrapper gsd_family_checkbox_wrapper">
									
                                        <input type="checkbox" class="checkbox-input bike_family_checkbox configurator_checkbox" name="01t5g000003NtmhAAC"  value="gsd" data="61"  /><!-- TODO  fix , make price dynamic   -->
                                        <div class="checkbox-tile ">
                                            <div class="checkbox-thumb">
                                                <img src="<?php echo $child_theme_dir_file; ?>/img/configure/gsd/GSD_Base_sm.jpg" /><!-- TODO  fix , make image dynamic   -->
                                            </div>
													<div class="checkbox-label">
														<div class="product-head">
															<?php $display_price=61; $Id="01t5g000003NtmhAAC"; ?>
															<div class="product-price">$<?php echo $display_price; ?><span>/week</span></div>
														</div>
													</div>											
                                        </div>
                                    </label>
											
											<input type=hidden name="price_<?php echo $Id; ?>" value="<?php echo $display_price; ?>" />
                                </div>
                                
                            </div>     
                            
                            <div class="bike_desc bike_desc_hsd" id="bike_desc_hsd">
                                The Tern HSD is ideal for your daily commute, and can be set up to carry 1 passenger.
                            </div>

                            <div class="bike_config_desc bike_config_desc_hsd" id="bike_config_desc_hsd">
                              <h6>Popular Builds</h6>
                            </div>
							
                            <div class="bike_desc bike_desc_gsd"  style="display:none;" id="bike_desc_gsd">
								The Tern GSD is a true car replacement. It can carry all your stuff and up to 2 passengers.
                            </div>

                            <div class="bike_config_desc bike_config_desc_gsd" style="display:none;" id="bike_config_desc_gsd">
                              <h6>Popular Builds</h6>
                            </div>							
							

								<!-- start bike Loop. -->
								<?php
								$Z = 0;
								foreach($preconfigs as $preconfig){
									$bikeId=$preconfig->bikeId;
									$Id = $Z;
									$name=$preconfig->name;
									$bikeName=$preconfig->bikeName;
									$usage=$preconfig->usage;
									$typicalUser=$preconfig->typicalUser;
									$products=$preconfig->products;
									$products_array=Array();
									foreach($products as $prod){
										$products_array[] = $prod->productId;
									}
									$thumbnailUrl=$preconfig->thumbnailUrl;									
									
									$description=$preconfig->description;
									if(empty($description)){$description="The description of this product is currently unavailable";}
									$bikeFamily="HSD"; // default 
									foreach($results as $bike){

										if($bikeId == $bike->Id){
											$display_price=0;
											$bikeFamily=$bike->bikeFamily;
											$accessories=$bike->accessories;
											$pricing=$bike->pricing;
											foreach($pricing as $price){
												if(($price->priceType=="Consumer") && ($price->interval=="week")){
													$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
													print "<!--   ::::name=$name ::::bikeFamily=$bikeFamily  :::display_price=$display_price -->";
												}
											}
											print "<!--  products::: ";
											print_r($products);
											print " -->";
											foreach($accessories as $acc){
												$accessoryId = $acc->Id;
												// if accessory is in list of products for this preconfig 
												if(in_array($accessoryId,$products_array)){
													$a_pricing=$acc->pricing;
													$accessoryName=$acc->accessoryName;
													foreach($a_pricing as $price){
														if(($price->priceType=="Consumer") && ($price->interval=="week")){
															$amount =$price->amount;
															$display_price = ($display_price + $amount);	// chekc this always the case // might need to be more sophisticated
															print "<!--   ::::acc::::$accessoryName    amount::::$amount    :::display_price=$display_price    -->";
														}
													}
												}
											}
											
										}
									
									}

									

									if($bikeFamily=="HSD"){
										$style_display="display:block";
									} else {
										$style_display="display:none";
									}
									
									$name_slug=$name;	//$str
									$delimiter="_";
									$name_slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $name_slug))))), $delimiter));

								?>
									<!-- bike checkbox start. -->
									<!--  bikeFamily ="<?php echo $bikeFamily; ?>"   -->
									<div class="checkbox bike_config_checkbox <?php echo $name_slug; ?> <?php echo $name_slug; ?>_<?php echo $bikeFamily; ?>  bike_family_<?php echo $bikeFamily; ?>" id="checkbox_<?php echo $Id; ?>"    style="<?php echo $style_display; ?>">
										<label class="checkbox-wrapper">
											<input type="checkbox" name="<?php echo $Id; ?>" class="checkbox-input configurator_checkbox preconfig_checkbox checkbox_<?php echo $Id; ?>"  value="<?php echo $Id; ?>" />
											<div class="checkbox-tile">
												<div class="checkbox-thumb">
												<?php
													if(empty($thumbnailUrl)){
														?>
													<img src="<?php echo $child_theme_dir_file; ?>/img/placeholder.jpg" class="missingThumb missing_bikeFamily" />
													<?php
													} else {
														print '<img src="'.$thumbnailUrl.'" class="thumbnailURL thumbnailUrl proconfigThumbnail" />';
													}
													?>
												</div>

												<div class="checkbox-label">
													<div class="product-head">
														<div class="product-title preconfig_title"><?php echo $name; ?></div>
														<div class="product-price preconfig_price">$<?php echo $display_price; ?><span>/week</span></div>            
													</div>
													
													<div class="product-desc"><?php echo $description; ?></div>
													<div class="product-ext" onclick="learn_more('<?php echo $Id; ?>');">
														<i class="fa-solid fa-circle-info"></i> Learn More
													</div>
												</div>
																				
											</div>
										</label>
									</div><!-- end check box -->
									<?php
									$Z++;
								}
							?>
								<!-- end loop -->
                        
                        </fieldset>
                    </form>                    

                </div><!-- end col_right_wrap -->
				
				<?php
				
				function accessories_section($section){
					global $child_theme_dir_file;
				?>
				<div class="col_right_wrap col_right_wrap_accessories" id="col_right_wrap_<?php echo $section; ?>"   style="display:none;">

                    <div class="progress_timeline">
                        <ol class="progress_list">
                            <li <?php if($section=="Bikes"){ ?>class="current"<?php } ?>>Bikes</li>
                            <li <?php if($section=="Passenger"){ ?>class="current"<?php } ?>>Passenger</li>
                            <li <?php if($section=="Cargo"){ ?>class="current"<?php } ?>>Cargo</li>
                            <li <?php if($section=="Purchase"){ ?>class="current"<?php } ?>>Purchase</li>
							<li <?php if($section=="Order"){ ?>class="current"<?php } ?>>Order</li>
                        </ol>
                    </div>

                    <div class="progress_intro">
						Next, find bags or racks to help you carry what you need.
                    </div>


                    <form class="select_checkbox_">
                        <fieldset class="checkbox-group">

                            <!-- loop through accessories start  -->
							<?php
						$default = "01t5g000003NtmiAAC";	//TODO check is default bike correct?
						global $results;
						global $ignore_bikes;
						foreach($results as $bike){
							$Id=$bike->Id;
							if(!in_array($Id,$ignore_bikes)){
							$bikeFamily=$bike->bikeFamily;
							$bikeName=$bike->bikeName;
							$accessories=$bike->accessories;	
							if($Id==$default){
								$styles="style='display:block'";
							} else {
								$styles="style='display:none'";
							}
							
							
							//	
								
									print "<div class='outer_accessories_checkbox accessories_$Id  $bikeFamily' id='accessories_$Id' $styles>";
									foreach($accessories as $accessory){
									
										$Id=$accessory->Id;
										$pricing=$accessory->pricing;
										$display_price=0;
										$priceType="Consumer";
										foreach($pricing as $price){
											if(($price->priceType=="Consumer") && ($price->interval=="week")){
												$display_price = $price->amount;	// chekc this always the case // might need to be more sophisticated
												$priceType="Consumer";
											}
											if($price->priceType=="One Off Purchase" && $display_price==0){
												$display_price = $price->amount;
												$priceType="One Off Purchase";
											}
										}												
										$thumbnailUrl=$accessory->thumbnailUrl;
										$highresUrl=$accessory->highresUrl;
										$accessoryType=$accessory->accessoryType;
										$accessoryName=$accessory->accessoryName;
										$accessoryFamily=$accessory->accessoryFamily;
										$adescription=$accessory->description;		
										if($accessoryFamily=="Add-On"){
											$AF = "Purchase";
										} else {
											$AF = $accessoryFamily;
										}
										if(empty($adescription)){$adescription="The description of this product is currently unavailable";}
										if(empty($thumbnailUrl)){$thumbnailUrl="$child_theme_dir_file/img/placeholder.jpg";}
											if($AF==$section){
												?>
												<div class="checkbox checkbox_<?php echo $Id; ?>">
												<label class="checkbox-wrapper">
													<?php
														if($section=="Purchase" || $section=="Add-On"){
															print "<!--    accessory:::  ";
															print_r($accessory);
															print "   -->";
														}
													?>
													<input type="checkbox" name="<?php echo $Id; ?>" class="checkbox-input configurator_checkbox checkbox_<?php echo $section; ?>" value="<?php echo $Id; ?>"  data="<?php echo $display_price; ?>" />
													<div class="checkbox-tile">
														<div class="checkbox-thumb">
															<img src="<?php echo $thumbnailUrl; ?>" class="add_on_thumbnailUrl" />
														</div>

														<div class="checkbox-label">
															<div class="product-head">
																<div class="product-title"><?php echo $accessoryName; ?></div>
																<div class="product-price">$<?php echo $display_price; ?><?php 
																if($priceType=="One Off Purchase"){
																	//echo " / wk";
																	// echo "*";
																} 
																if($section!="Purchase"){
																?><span>/week</span>
																<?php
																}
																?>
																</div>
																<input type=hidden name="price_<?php echo $Id; ?>" value="<?php echo $display_price; ?>" />
															</div>
															<div class="product-desc"><?php echo $adescription; ?></div>
															<div class="product-ext"  onclick="learn_more_accessory('<?php echo $Id; ?>');">
																<i class="fa-solid fa-circle-info"></i> Learn More
															</div>
														</div>
																						
													</div>
												</label>
												</div><!--  checkbox end  -->
												<?php
											}
										}	// end loop foreach accessory
									print "</div><!--   END     outer_accessories_checkbox             -->";
								}	// end if ! array 
							}	// end loop foreach bike 
							?>
							<!-- end accessories loops -->
                          <input type=hidden name="current_bike_id" id="current_bike_id">
                        </fieldset>
                    </form>                    

                </div><!-- end col_right_wrap -->
				<?php
				}
				
				accessories_section("Passenger");
				accessories_section("Cargo");
				accessories_section("Purchase");
				
				include "content_order_overview.php";
				
				?>
				
				
				

                <div class="subtotal_panel">
                    <div class="info_wrap">
                      <!-- <div class="subtotal_group">
                        <div class="sub_total">Total:</div>
                        <div class="sub_amount">$44.00</div>
                        <div class="sub_period"></div>
                      </div> -->
                      <div class="desc_group">
                        <div class="detail_group">
                          <div class="detail_total">Subscription total:&nbsp;</div>
                          <div class="detail_amount">$44.00</div>
                          <div class="detail_period">/week</div>
                        </div>
                        <div class="accessory_group" style="display:none;">
                          <div class="accessory_desc"> Purchases:&nbsp;</div>
                          <div class="accessory_amount">$0.00</div>                          
                        </div>
                      </div>
                    </div>
						<!--
                    <div class="button_wrap_right center">
                        <a href="#" onclick="configurator_next()" class="button blue_btn">Next ></a>
                    </div>
					-->
					<div class="button_wrap_right center">

					  <a href="#" onclick="configurator_back();" class="button naked_black goto goto_back"  style="opacity:0;"  >Back</a>

					  <a href="#" onclick="configurator_next()" class="button blue_btn goto goto_next">Next ></a>
					</div>					
                </div>

            </div>


        </div>

    </section>

  </main>





<!--  end of template -->

<script>
jQuery(document).ready(function() {
	<?php

		print "/*   get_ids: ";
		
		print_r($get_ids);
		print " */";

		if(!empty($get_ids)){
			$bike_id = $get_ids[0];
			print "\n\n";
			?>
			 jQuery(document).ready( function($){
			<?php
			
			print "jQuery('.config_img_block').hide();";
			print "\n\n";
			print "jQuery('.config_img_block .base_img').css('opacity', '0');";	
			print "\n\n";			
			print "jQuery('.bike_".$bike_id."').show();";
			print "\n\n";
			print "jQuery('.bike_".$bike_id." .base_img').css('opacity', '1');";
			print "\n\n";
			print "jQuery('.lrg .bike_family_checkbox_wrapper input[type=checkbox]').prop('checked', false);";
			print "jQuery('.lrg .bike_family_checkbox_wrapper input[name=".$bike_id."]').prop('checked', true);";
			
			$z=0;
			foreach ($get_ids as $k=> $g){
				if($k!=0){
					// show accessory image 
					print "\n\n";
					print "jQuery('.bike_".$bike_id."  .accessory_".$g."').css('opacity', '1');";
					// check the box 
					print "\n\n";
					print "jQuery('.accessories_".$bike_id." .checkbox_".$g."  .checkbox-input').prop('checked',true);";
					// calculate total price
					?>
					calculate_total();
					
					<?php
				}
				$z++;
			}
			?>
			 });
			<?php
			if(!empty($get_ids[0])){
				?>
				current_tab="OrderOverview";
				configurator_next();
				<?php
			}
		}
	?>
});


function close_accessory_popup(){
	// close this pop up window 
	jQuery("#fullscreen2").hide();
	
}
</script>


<div id="fullscreen2" class="fullscreen active" style="display: none;">
          
      <div class="_row three_col">             
			
        <div class="accessory_detail">
		<div class="close" onclick="close_accessory_popup();"></div>
		<?php
			include "template-accessory-part.php";
		
		?>
      </div> 
    </div>
</div>

<?php
get_footer();

?>