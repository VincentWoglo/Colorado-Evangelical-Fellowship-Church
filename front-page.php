<?php 
    /**
     * Template Name: Front Page
     *
     */
    get_header();
?>

    
<main>
    <section class="hero-section">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/woman-in-orange-coat-with-black-and-brown-scarf-5418305.jpg');?>" alt="" class="hero-section-background">
        <div class="container">
            <div class="wrapped">
                <h4 class="subheader">Welcome to our CHURCH</h4>
                <h1>Become a part of our community</h1>
                <button>Learn more</button>

                <div class="hero-description">
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="church-vision-section">
        <div class="container">
            <h4 class="subheader">sub-headline</h4>
            <h2 class="">a church that's relevant</h2>
            <div class="card-wrapper">
                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/prayer-icon.png');?>" alt="" class="card-icon">
                    <h3 class="card-title">About us</h3>
                    <p class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/connect-icon.png');?>" alt="" class="card-icon">
                    <h3 class="card-title">Get involved</h3>
                    <p class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/give-icon.png');?>" alt="" class="card-icon">
                    <h3 class="card-title">Giving back</h3>
                    <p class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="love-and-compassion-section">
        <div class="container">
            <h4 class="subheader">sub-headline</h4>
            <h2 class="">love and compassion</h2>
            <p class="header-paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <a href="http://" rel="noopener noreferrer" class="read-more-btn">Read More</a>
            <div class="section-images">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/a-bearded-man-praying-5206040.png');?>" alt="" class="" />
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/man-and-woman-reading-book-while-sitting-on-pews-8468470.png');?>" alt="" class="mt-64px" />
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/people-sitting-on-brown-pews-8674151.png');?>" alt="" class="" />
            </div>

            <h4 class="subheader mt-64px">sub-headline</h4>
            <h3 class="small-subheader">love and compassion</h3>
            <p class="header-paragraph-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="http://" rel="noopener noreferrer" class="read-more-btn-o-text">
                <div class="">
                    <p>Read More</p>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/right-arrow.svg');?>" alt="" class="button-arrow">
                </div>
            </a>
        </div>
    </section>

    <section class="benefits-of-joining-church-section">
        <div class="container">
            <h4 class="subheader">sub-headline</h4>
            <h2 class="">love and compassion</h2>

            <div class=""></div>
        </div>
    </section>
</main>
<?php wp_footer(); ?>
        
<?php get_footer();?>