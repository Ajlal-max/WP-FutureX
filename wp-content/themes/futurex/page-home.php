<?php
/**
 * Template Name: FutureX Home
 */
//Custom Fields
$prelaunch_price = get_post_meta(66, 'prelaunch_price', true);
$launch_price    = get_post_meta(66, 'launch_price', true);
$final_price     = get_post_meta(66, 'final_price', true);
$course_url     = get_post_meta(66, 'course_url', true);
$button_text     = get_post_meta(66, 'button_text', true);
$optin_text     = get_post_meta(66, 'optin_text', true);
$optin_button_text     = get_post_meta(66, 'optin_button_text', true);

//  Advanced Custom Fields
$rocket_feature_image  = get_field('rocket_feature_image');
$rockets_section_title = get_field('rockets_section_title');
$rockets_section_desc  = get_field('rockets_section_description');
$reason_1_title        = get_field('reason_1_title');
$reason_1_desc         = get_field('reason_1_description');
$reason_2_title        = get_field('reason_2_title');
$reason_2_desc         = get_field('reason_2_description');

$hubble_section_image = get_field('hubble_section_image');
$hubble_section_title = get_field('hubble_section_title');
$hubble_section_body = get_field('hubble_section_body');

//SMALLSAT RIDESHARE PROGRAM
$rideshare_program_image = get_field('rideshare_program_image');
$rideshare_program_title = get_field('rideshare_program_title');
$rideshare_program_body = get_field('rideshare_program_body');

//echo '<pre>'; print_r($rideshare_program_title); echo '</pre>';
// die();
get_header();
?>

 <!----------------------- HERO  ------------------------>
 <section id="hero" data-type="background" data-speed="5">
            <article>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-sm-5">
                            <!-- <img src="assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo"> -->
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img2/lg2.png" alt="logo image" class="logo">
                        </div>
                        <div class="col-sm-7 hero-text">
                            <h1><?php bloginfo('name') ?></h1>
                            <p class="lead"><?php bloginfo('description') ?></p>
                            <!-- <p class="lead">A Giant Leap towards future of creating Magic in mankind history</p> -->
                            <div id="price-timeline">
                                <div class="price active">
                                    <h4>Pre-Launch Price <small>Ends Soon!</small></h4>
                                    <span><?php echo $prelaunch_price; ?></span>
                                </div><!--price-->
                                <div class="price">
                                    <h4>Launch Price <small>Coming Soon!</small></h4>
                                    <span><?php echo $launch_price; ?></span>
                                </div><!--price-->
                                <div class="price">
                                    <h4>Final Price <small>Coming Soon!</small></h4>
                                    <span><?php echo $final_price; ?></span>
                                </div><!--price-->
                            </div><!--price timeline-->
                            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                        </div><!--col-->
                    </div>
                </div><!--container closing-->
            </article>
        </section><!--hero closing-->

        <!----------------------- OPT in section ------------------------>
        <section id="optin">
            <div class="container">
                <div class="row">

                    <div class="col-sm-8">
                        <p class="lead"><?php echo $optin_text ?></p>
                    </div><!-- col --> 

                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#Modal">
                        <?php echo $optin_button_text ?>
                        </button>
                    </div><!-- col -->

                </div><!-- row -->
            </div><!-- container -->
        </section><!-- option -->

        <!----------------------- Boost YOUR INCOME ----------------->
        <section id="boost-income">
            <div class="container">
                <div class="section-header">
                <!-- ======If User uploads Rocket Feature Image ===== -->
                <?php if( !empty($rocket_feature_image) ) { ?>
                    <img class="boost-rocket" src="<?php echo  $rocket_feature_image['url']; ?>" alt="<?php  echo $rocket_feature_image['alt'];  ?>">
                    <?php } ?>
                    <!-- <img class="boost-rocket" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img2/rocket.png" alt="rocket image"> -->
                
                    <h2><?php echo  $rockets_section_title; ?></h2>
                </div><!--section header-->
                <p class="lead">
                <?php echo  $rockets_section_desc; ?>
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php echo  $reason_1_title; ?></h3>
                        <p><?php echo  $reason_1_desc ?></p>
                    </div><!--column-->
                    <div class="col-sm-6">
                        <h3><?php echo  $reason_2_title; ?></h3>
                        <p><?php echo  $reason_2_desc ?></p>
                    </div><!--column-->
                </div><!--row-->
            </div><!--container-->
        </section> 

        <!----------------------- WHO BENEFITS-Hubble Telescope ----------------->
        <section class="section-who-hubble" id="who-benfits">
            <div class="container">
                <div class="section-header">
                <?php if( !empty($hubble_section_image) ) { ?>
                    <img class="who-hubble" src="<?php echo $hubble_section_image['url']; ?>" alt="<?php echo $hubble_section_image['alt']; ?>>">
                <?php } ?>
                    <!-- <img src="assets/img//icon-pad.png" alt="Pad and Pencil"> -->
                    <h2><?php echo $hubble_section_title; ?>></h2>
                </div><!--section header-->

                <div class="row justify-content-sm-center">
                    <div class="col-sm-8">
                        <?php echo $hubble_section_body; ?>
                    </div><!--col-->
                </div><!--row-->
            </div>
        </section>    
        <!----------------------- Course Features ----------------->
        <section id="course-features">
            <div class="container">
                <div class="section-header">
                    <?php if( !empty($rideshare_program_image) ) { ?>
                        <img class="boost-rocket" src="<?php echo  $rideshare_program_image['url']; ?>" alt="<?php  echo $rideshare_program_image['alt'];  ?>">
                    <?php } ?>
                    <h2><?php echo $rideshare_program_title; ?></h2>

                    <?php if( !empty($rideshare_program_body) ) { ?>
                        <p class="lead"><?php $rideshare_program_body; ?></p>
                    <?php } ?>
                </div><!--section header-->

                <div class="row ">
                    <?php $loop = new WP_Query( array('post_type' => 'program_feature', 'orderby' => 'post_id', 'order' => 'ASC'));
//                    echo'<pre>'; print_r($loop); echo '</pre>';
//                    die();
                    ?>

                    <?php while ( $loop->have_posts() ) { $loop->the_post(); ?>
                        <div class="col-sm-4 text-center" >
                            <i class="<?php the_field('rideshare_feature_icon'); ?>"></i>
                            <h4><?php the_title(); ?> </h4>
                            </div><!--col-->
                    <?php } ?>

                </div><!--row-->

            </div><!--container-->
        </section>  

        <!----------------------- Project Features ----------------->
        <!-- <section id="project-features"> -->
           <!-- <div class="container">
               <h2>STARSHIP</h2>
               <p class="lead">SERVICE TO EARTH ORBIT, MOON, MARS AND BEYOND</p>
               <div class="row justify-content-sm-center">
                   <div class="col-sm-8"> -->
                    <!-- SpaceX’s Starship spacecraft and Super Heavy rocket (collectively referred to as Starship) represent a fully reusable transportation system designed to carry both crew and cargo to Earth orbit, the Moon, Mars and beyond. Starship will be the world’s most powerful launch vehicle ever developed, with the ability to carry in excess of 100 metric tonnes to Earth orbit. -->
                   <!-- </div> col-->
               <!--</div> row-->
           <!--</div> container-->
        <!-- </section>   -->

        <!----------------------- Video Features ----------------->
        <section id="featurette">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-8">
                        <h2>STARSHIP</h2>
                        <iframe width="100%" height="415" src="https://www.youtube.com/embed/lhydEz-ja1g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
        </section> 

        <!----------------------- Instructor ----------------->
        <section id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Elon Musk</h3>
                                <p><small>Mind Behind The Success </small></p>
                            </div><!--col-lg-8-->
                            <div class="col-lg-4"> <!-- align-self-center-->
                                <a href="https://twitter.com/elonmusk" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/TheElonmusk/" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.spacex.com/" target="_blank" class="badge social globe"><i class="fa fa-globe"></i></a>
                            </div><!--col-lg-4-->
                        </div><!--row-->
                        <p class="lead">Elon Musk outlined his vision for how he hopes to land a rocket on Mars by 2022.</p>
                        <p>
                            "You want to wake up in the morning and think the future is going to be great - and that’s what being a spacefaring civilization is all about. It’s about believing in the future and thinking that the future will be better than the past. And I can’t think of anything more exciting than going out there and being among the stars" Elon Musk.
                        </p>
                        <p>
                            "In order to refill the spaceship in orbit, you have to be able to rendezvous and dock with the spaceship with very high precision and transfer propellant," Mr. Musk.
                            Goal is to land two cargo ships on Mars in 2022 followed by two crewed ships and two cargo ships in 2024.
                        </p>
                        <p>His final suggestion was that the BRF could also be used for transport on Earth, travelling at high-speed above the atmosphere, allowing for journeys between most places on Earth in under an hour with most journeys under 30 minutes.</p>
                        <hr>
                        <h3>Why MARS?</h3>
                        <p>One of Earth's closest habitable neighbors</p>
                        <div class="row">
                            <div class="col-4">
                                <div class="num">
                                    <div class="num-content">
                                        6
                                        <span>Months travel to MARS</span>
                                    </div><!--num-content-->
                                </div><!--num-->
                            </div><!--col-xs-4-->
                        
                            <div class="col-4">
                                <div class="num">
                                    <div class="num-content">
                                        2
                                        <span>Moons</span>
                                    </div><!--num-content-->
                                </div><!--num-->
                            </div><!--col-xs-4-->
                        
                            <div class="col-4">
                                <div class="num">
                                    <div class="num-content">
                                        14
                                        <span>Orbiting satellites</span>
                                    </div><!--num-content-->
                                </div><!--num-->
                            </div><!--col-xs-4-->
                        </div><!--row-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--container-->
        </section> 

        <!----------------------- Testimonials ----------------->
        <section id="kudos">
           <div class="container">
               <div class="row">
                   <div class="col-sm-8 offset-sm-2">
                    <h2>Human Spaceflight</h2>
                    <small class="text-muted">Making life Multiplanetary</small>
                    <hr>
                    <!--Testimonial 1-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <!-- <img src="assets/img/brennan.jpg" alt="12bre"> -->
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img2/moon.png" alt="moon">
                        </div><!--col-sm-4-->
                        <div class="col-sm-8">
                           <h5>MISSION MOON</h5>
                           <p>Only 24 Humans have been to the moon in history. No one hass been back since 1972.</p>
                            <p>The Moon is one of Earth’s closest habitable neighbors and provides an opportunity to gain valuable experience for missions to Mars and beyond.</p>
                        </div><!--col-sm-8-->
                    </div><!--row testimonial-->
                    <!--Testimonial 2-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <!-- <img src="assets/img/brennan.jpg" alt="12bre"> -->
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img2/earth.png" alt="earth">
                        </div><!--col-sm-4-->
                        <div class="col-sm-8">
                           <h5> MISSION EARTH ORBIT</h5>
                            <p>Experience Earth’s wonders from space—from the Great Barrier Reef, Himalayas, Amazon River, and Giza’s Pyramids by day, to the glow of city lights, lightning storms, and the Aurora Borealis by night. Dragon fully orbits the Earth every 90 minutes, making a highly customized flight path possible. Fly over your hometown, famous landmarks and other places meaningful to you.</p>
                        </div><!--col-sm-8-->
                    </div><!--row testimonial-->
                    
                    <!--Testimonial 3-->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <!-- <img src="assets/img/brennan.jpg" alt="12bre"> -->
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img2/mars.png" alt="mars">
                        </div><!--col-sm-4-->
                        <div class="col-sm-8">
                           <h5> MISSION MARS & BEYOND</h5>
                            <p>At an average distance of 140 million miles, Mars is one of Earth's closest habitable neighbors. Mars is about half again as far from the Sun as Earth is, so it still has decent sunlight. It is a little cold, but we can warm it up. Its atmosphere is primarily CO2 with some nitrogen and argon and a few other trace elements, which means that we can grow plants on Mars just by compressing the atmosphere. Gravity on Mars is about 38% of that of Earth, so you would be able to lift heavy things and bound around. Furthermore, the day is remarkably close to that of Earth.</p>
                        </div><!--col-sm-8-->
                    </div><!--row testimonial-->
                   </div><!--col-->
               </div><!--row-->
           </div><!--container-->
        </section> 

<?php
get_footer();
