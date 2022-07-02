<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: FAQ - Lug & Carrie
 *
 * @package storefront
 */
$full_stylesheet_dir_path = get_stylesheet_directory();
$child_theme_dir_split_path=explode("/wp-content/", $full_stylesheet_dir_path);
$child_theme_dir_file = "/wp-content/".$child_theme_dir_split_path[1];

get_header(); ?>

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
                            <h1>Frequently Asked Questions</h1>
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


        

        <section class="questions centered ">
            <!-- <div class=""> --> 
            <div class="_row ">             
                <div class="column_60">

                    <div class="_wrap">

                        <div class="_group">
                            <div class="faqs">
                                
                                <!--  -->
                                <div>
                                    <h3 class="">General Questions</h3>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What is an electric bike?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            An electric bike is just like a regular bike, but it includes an electric motor that is powered by a rechargeable battery. The motor provides pedal assistance, which makes carrying a large load, heading up hills, or riding into the wind (or all of the above) a lot easier.<br><br>Lug &amp; Carrie eBikes have four different levels of pedal assistance, which allow you to get as much or as little help as you want. <br><br>The motor makes it easy for you carry loads like kids or groceries, or to get where you're going without getting overheated and sweaty.<br><br>Ultimately, eBikes help you to do more, ride more, and ride further.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        You mentioned that eBikes have a battery. Do I have to charge it?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Yes, you have to charge the battery if you want to use the electric motor, which we assume is the reason you’re looking into eBikes? The charge process is as simple as plugging it in, just as you would with your mobile phone. To fully charge the battery for either the Tern GSD or HSD, takes about 4 hours. <br><br>The battery can be removed from the bike for charging. This is super convenient if you want to take it up to your office with you to charge while you stare out the window and think about what you want to do next with your Tern. <br><br>So how long does a charge last? Using a single standard, fully charged battery, the Tern GSD will run between 50 and 110 kilometers, depending on how heavily you rely on the pedal assist and how much load you carry. The Tern HSD will run for between 42 and 110 kilometers.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Will I get stranded if my battery goes flat?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            No worries. Each subscription includes Rider Rescue service that will pick you up and take you home if your battery goes flat or if something else goes wrong with your bike.<br><br>Additionally, if you were looking for a workout, your Tern will work just like a normal bike when the battery is flat or if the motor is turned off.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        How do I take good care of my bike?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            There are a couple of good practices we suggest.<br><ol><li>Keep the tyres inflated. It’s best to check them often, before each ride if you can. We recommend 45 psi.<br></li><li>Store the e-bike inside or under good cover - prolonged storage outdoors will cause damage including like rust. Inside storage is better for security purposes too. </li><li>And for some reason, vandals like to attack bikes parked in public places, so we don’t recommend leaving your bike parked overnight outside your office, school, etc.</li><li>If you plan on storing your bike in a parking garage or other communal bike storage area, securely lock your bike using the frame lock and chain, and engage the alarm. As secure as these areas seem, they are prone to bike theft.</li></ol>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Is there a limit on how fast my eBike will go?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Yes. The pedal assistance you receive from your eBike is limited to speeds not exceeding 25km per hour. This rule governs all eBikes in Australia. <br><br>That said, you can ride your bike as fast as you want. Anything above 25km per hour, however, will require you to either pedal hard or find a big hill.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        You only offer two bikes. How do I know I'll fit on one of them?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                        Both the Tern GSD and HSD are built to be extremely flexible in terms of
                                        who can ride them. The bikes each have handlebars and seat which, when 
                                        adjusted, accommodate any rider from 150-195cm tall. And because the 
                                        frames have low-step through heights, it’s easy to get on and off, no 
                                        matter your size. <br><br>The best way to illustrate the flexibility of 
                                        the Terns it to show you! We’d love to have you come by for a test ride.
                                        Go to our&nbsp;<a href="https://www.lug-carrie.com/test-rides" target="_blank">test rides page</a> to book a time, or get in touch at info@lug-carrie.com and we’ll organise your visit.
                                        </p>
                                    </div>
                                </div>

                                <div >
                                    <h3>The Lug &amp; Carrie Subscription</h3>
                                </div>
                                
                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What is a subscription?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            A Lug &amp; Carrie subscription is an ongoing rental of one of our eBikes. <br><br>For a fixed weekly fee, you receive a bike (of course) that is kitted out with everything you need to get on the road (you’ll need to bring your own helmet), maintenance by one of our expert mechanics, Bicycle Network roadside assistance in case your bike breaks down, and insurance to cover theft or damage.<br><br>We’ve created a&nbsp;<a href="https://www.lug-carrie.com/post/5-things-ebike-subscription-service">helpful blog post</a> that provides even more detail about the Lug &amp; Carrie subscription service.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Why should I get a subscription instead of just buying a bike?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            We designed our subscription to be the best way to start riding and keep riding an eBike.<br><br>Our subscription is a simple way to see if doing more of your life on an eBike works for you. We can usually get you riding in a few days. 
                                        </p>
                                        <p>
                                            The subscription is good value - Lug &amp; Carrie's eBikes are top quality, from the tyres to the brakes to the batteries.<br><br>A subscription is also more flexible than owning a bike, because life changes and your needs might change. You can swap accessories, upgrade, downsize or give the bike back.<br><br>You can even buy your bike, if you fall in love. It happens...<br><br>You'll never pay for service, and our team can come to you for most repairs. <br><br>Insurance, locks and alarms are costly but necessary items that don't usually appear in the purchase price of a bicycle, but with a subscription you need not worry, because those things are included as well.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        How do I cancel my subscription?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            All you have to do is send us an email. Cancellation will take effect 4 weeks from the day of notice, at which point you will bring back your eBike, the bike lock, charger and any accessories that were included in your subscription.&nbsp;<br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can  I come test ride the bike first?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Absolutely. Head to&nbsp;<a href="https://www.lug-carrie.com/test-rides" target="_blank">this page</a> to schedule a time, or send us an email to info@lug-carrie.<br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What if the bike gets damaged or stolen?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            If your bicycle is damaged or stolen, you should get in touch with us to help you sort out the problem. <br><br>Each bicycle is covered by insurance that carries an excess of $500. In the case of damage above $500 or theft, the subscriber would be responsible for the $500 excess payment, while insurance would cover the rest. <br><br>Damaged or lost parts, components or accessories valued up to $500 will be charged to the subscriber at the value of the item/s.<br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can you tell me more about the insurance?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            The insurance included with your subscription only covers theft and damage of the bike, with an excess of $500. Check out our FAQ on 'What happens if the bike gets damaged or stolen?' for more information on how that works.<br><br>The insurance included with a subscription does not cover personal injury or third party insurance, which a lot of our customers get from either their own insurance company, or from third party insurers. <br><br>There are lots of personal injury/3rd party insurance providers out there and we're not experts, however we know that the Bicycle Network and Cycling Victoria are good organisations that provide well priced insurance as part of membership.<br><br>Want to find out more? Head to the following links:<br><a href="https://www.bicyclenetwork.com.au" target="_blank">Bicycle Network</a><br><a href="https://cycling.org.au/" target="_blank">Cycling Victoria</a> <br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What is included with each bike?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Each of the Terns is fully kitted out with almost everything you would need for your ride: front and rear lights, mud guards, a heavy duty rack on the back, a lock, an alarm (fancy!) and, most importantly, a bell (don’t laugh, it’s the law). The only thing you’ll need to provide is a helmet.<br><br>Lug &amp; Carrie also offers a range of accessories you can add on to suit your use, like child seats, panniers, or a rack for the front.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can I buy one of your bikes?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Yes, you can.<br><br>If you are a current subscriber, good news: depending on how long you’ve been a customer, we can offer you a good price on the purchase of your bike. Get in touch with us and we will be more than happy to discuss. <br><br>If you are not yet a subscriber with Lug &amp; Carrie, get in touch at info@lug-carrie.com and we can chat about what you have in mind. <br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can I rent or buy your bikes for my business?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Yes, you can. <br><br>We think our bikes can be great tools for many types of businesses. If you are interested, contact us at&nbsp;info@lug-carrie.com&nbsp;and we can discuss your needs and what we can offer.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        I am currently a subscriber and rider the Tern GSD, but have decided that I would like to try the HSD instead. Can I swap?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            Yes, you can. <br><br>We allow one free swap within the first four weeks of your subscription, to ensure that you have found the best bike for you and your lifestyle.<br><br>After the first four weeks of your subscription you can still swap, but we’ll charge you a small fee of $180.
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What if I get a flat tyre or have some other issue with my bike when I am on the road?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            If you were a normal bike owner, you’d either find yourself learning to use tyre wrenches by the side of the road, or locking your bike to a tree and calling someone to come pick you up.<br><br>As a Lug &amp; Carrie subscriber, however, you are covered by the Bicycle Network's Rider Rescue roadside assistance program. If you are stranded with mechanical issues or an injury, they’ll organise a taxi to take you and your bike to a destination of your choosing, a ride valued up to $50.<br><br>For more details, check out <a href="https://www.lug-carrie.com/post/the-lug-carrie-guide-to-breakdowns">The Lug &amp; Carrie Guide to Breakdowns</a><br>
                                        </p>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3>Melbourne Customers</h3>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        In which parts of Melbourne do you operate?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            We operate all over Melbourne, however there are a few differences in the subscription depending on where you live. <br><br>For customers who live within 25km of our shop, we include:<br><ul><li>free delivery at the start of each subscription and pickup at the end.</li><li>free on-site servicing, where we make minor repairs at your house, while you wait.&nbsp; </li><li>free delivery and pickup for any service that needs to be completed at our shop.</li></ul><br>For customers who live between 25 and 40km from our shop, all of the above is included, however for each trip to your house we will charge a $60 fee. You are always welcome to bring your bike to our shop for free servicing with no fees. <br><br>And for those who are beyond 40km from our shop in Melbourne, you may still able to get a subscription, however there are a couple of differences:<br><ul><li>we will quote a price for deliveries and pickups based on where you live.</li><li>we do not offer on site servicing.</li><li>we will need you to bring your bike to our shop at least once a year for regular maintenance.</li><li>bike and accessory swaps will be completed at our shop.</li></ul>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can you deliver the bike to my house when I start my subscription? How about picking it up for servicing?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            For customers that live within 25km of our shop in Fitzroy, we offer free deliveries and pickups on Wednesdays and Saturdays.<br><br>If you live between 25km and 40km from our shop, deliveries and pickups start at $60.<br>
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What's your address and when are you open?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p><b>Melbourne</b>: We are located at 146 Argyle Street, Fitzroy.<br><br>
                                            <img src="https://files.elfsightcdn.com/acf3ff7f-9715-475a-874f-b6660b2babdb/fc4ff9d2-3be8-474d-864f-cc567dff9885.png">
                                            <br><br>
                                            We are open Tuesday to Friday, 9 am - 6pm, and 10 am - 4 pm on Saturday. <br><br>
                                            Get in touch at info@lug-carrie.com if you want to schedule some service, swap some accessories, or test ride one of the Terns.<br><br>
                                            <a href="https://g.page/lugandcarrie?gm" target="_blank">Google Maps, Lug &amp; Carrie Melbourne</a><br>
                                        </p>
                                    </div>
                                </div>

                                <div >
                                    <h3>Sydney Customers</h3>
                                </div>
                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        In which parts of Sydney do you operate?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            We are currently operating in the following Sydney LGAs:
                                        </p>
                                        <ul>
                                            <li>Bayside</li>
                                            <li>Burwood</li>
                                            <li>Canada Bay </li>
                                            <li>Canterbury - Bankstown (east of King Georges Road only)</li>
                                            <li>City of Sydney</li>
                                            <li>Georges River</li>
                                            <li>Hunters Hill</li>
                                            <li>Inner West</li>
                                            <li>Lane Cove</li>
                                            <li>Mosman</li>
                                            <li>North Sydney</li>
                                            <li>Northern Beaches (south of Warringah Road and Dee Why east of Pittwater Road only)</li>
                                            <li>Randwick</li>
                                            <li>Ryde (east of Lane Cove Road only),</li>
                                            <li>Strathfield</li>
                                            <li>Waverley </li>
                                            <li>Willoughby</li>
                                            <li>Woollahra</li>
                                        </ul>
                                        <p>
                                            For people who do not live in the areas noted above, we do plan to expand in the near future, so get in touch and we will keep you posted. 
                                        </p>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        Can you deliver the bike to my house when I start my subscription? How about picking it up for servicing?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            For customers who live in our operating area (see 'In which parts of Sydney do you operate?'), we offer:
                                        </p>
                                        <ul>
                                            <li>free delivery at the start of each subscription and pickup at the end,</li>
                                            <li>free on-site servicing, where we make minor repairs at your house, while you wait,</li>
                                            <li>free delivery and pickup for any service that needs to be completed at our shop, and </li>
                                            <li>free deliveries and pickups on Wednesdays and Saturdays. </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="faqs_item">
                                    <div class="faqs_item_title">
                                        What's your address and when are you open?
                                    </div>
                                    <div class="faqs_item_content">
                                        <p>
                                            We operate in Sydney but do not currently have a storefront. <br><br>
                                            We are open Tuesday to Friday, 9 am - 6pm, and 10 am - 4 pm on Saturday. <br><br>
                                            Get in touch at info@lug-carrie.com or call 02 9000 1255 if you want to schedule some service, swap some accessories, or test ride one of our bikes.
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





	

<script src="<?php echo $child_theme_dir_file; ?>/js/faqs.js"></script>
<!--  end of template -->



<?php
get_footer();