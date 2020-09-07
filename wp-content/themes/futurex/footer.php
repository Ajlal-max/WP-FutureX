<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FutureX
 */

?>

<?php wp_footer(); ?>

<!--SIgn Up Section-->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h2 class="display-1">FutureX</h2>
                <p>Starting commercial flights for private passengers to both Earth and Lunar orbit. To start planning your journey, <strong>Contact Us</strong>.</p>
                <p><a href="#" class="btn btn-lg btn-block">Book a Seat</a></p>
            </div><!--col-sm-6-->
        </div><!--row-->
    </div><!---container-->
</section><!--signup-->

        <!----------------------- Footer ----------------->
<footer>
    <div class="container">
            <div class="row">
                <div class="col-sm-3 align-self-center">
                    <p><a href="/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img2/logo1.png" alt="logo"></a></p>
                </div><!--end col-sm-3-->
                <div class="col-sm-6">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Resources</a>
                            </li>
                            <li class="nav-item signup-link">
                                <a class="nav-link" href="#">Sign up now</a>
                            </li>
                            </ul>
                </div><!--col-sm-6-->
                <div class="col-sm-3 align-self-center">
                    <p class="pull-right">&copy; 2020 FutureX</p>
                </div><!--col-sm-3-->
            </div>
    </div><!--container-->
</footer>

        <!----------------------- Footer ----------------->

        <!----------------------- Modal ----------------->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-header">
            <button type="button" class="close" data-toggle="modal" data-target="#myModal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
        </div><!-- Modal header -->

        <div class="modal-body">
            <p>Simple enter your name and emai! As a thankyou for joining us, we're going to give you one of our best selling courses, <em>for Free!</em></p>

            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="subscribe-name">Your first name</label>
                    <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                </div><!--form-group-->
            </form>
        </div><!--Modal body-->
    </div><!--Modal dialog-->


</div>
        <!----------------------- Modal End ----------------->
        <!------------/////////////////////////////////////////////------------>
        
        <!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div><!--modal-header close-->
            <div class="modal-body">
                <p>Simple enter your name and emai!</p>

                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div><!--form-group Name-->
                
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="Your Email">
                    </div><!--form-group email-->
                    <div class="modal-footer col-sm-4">
                        <input type="submit" class="btn btn-danger" value="Subscribe !">
                    </div><!--modal footar-->
                </form>
                <hr>
            </div>
        <!-- </div>modal-content close -->
        </div>
    </div>
</div>


    <!------------/////////////////////////////////////////////------------>
        <!----------------------- Bootstrap Core JS ----------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
