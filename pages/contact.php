<?php 
    /**
     * Template Name: Contact Page
     *
     */
    get_header();
?>
    <section class="contact-hero-section">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/6liebVeAfrY.png');?>" alt="" class="contact-hero-section-image">
        <div class="container">
            <div class="contact-hero-information">
                <h4 class="">Contact</h4>
                <h1 class="contact-hero-text">
                    Get in touch with our CHURCH
                </h1>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <h2 class="contact-form-title">
                    Contact form:
                </h2>

                <form action="" class="">
                    <input type="text" name="" id="" class="contact-full-name" placeholder="Your full Name"> <br />
                    <input type="text" name="" id="" class="contact-email" placeholder="Your Email"> <br />
                    <input type="text" name="" id="" class="contact-phone-number" placeholder="Your phone Number"> <br />
                    <input type="text" name="" id="" class="contact-message" placeholder="Message"> <br />
                    <input type="button" name="" id="" class="contact-send-message-btn" value="Send Message">
                </form>
            </div>
            <div class="contact-business-information-wrapper">
                <p class="">Address</p>
                <h3 class="business-physical-location">
                    NH 234   Public Square
                    San Francisco  65368
                </h3>

                <p class="mt-32px">
                    Contact Details
                </p>
                <a href="tel: (480) 555-0103" class="business-phone-number"><h3>(480) 555-0103</h3></a>
                <a href="mailto:finsweet@example.com" class="business-email"><h3>finsweet@example.com</h3></a>

                <p class="">
                    Find us here
                </p>
                <ul class="contact-social-information">
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/facebook-black.svg');?>" class="" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/twitter-black.svg');?>" class="" alt="">
                    </li>
                    <li>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/linked-in-black.svg');?>" class="" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php wp_footer(); ?>
        
<?php get_footer();?>