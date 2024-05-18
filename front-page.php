<?php
$first_section = get_field('first_section');
$hero_background = $first_section['hero_background'];
$hero_title = $first_section['hero_title'];
$hero_description = $first_section['hero_description'];
$social_links = $first_section['social_links'];

$second_section = get_field('second_section');
$about_me_img = $second_section['about-me-img'];
$about_subtitle = $second_section['subtitle'];
$about_title = $second_section['title'];
$about_description = $second_section['description'];
get_header();

?>
<main class="home-page">
    <section class="home-section-1"> 
        <?php if($hero_background): ?>
            <img src="<?php echo $hero_background['url'] ?>" .  alt="b<?php echo $hero_background['alt'] ?>">
        <?php endif; ?>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo $hero_title ?></h1>
            <p class="hero-text"><?php echo $hero_description ?></p>
            <div class="hero-socials">
                <a href="<?php echo $social_links['instagram'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "./assets/images/instagram.png" ?>" alt="instagram">
                </a>
                <a href="<?php echo $social_links['facebook'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "./assets/images/facebook.png" ?>" alt="facebook">
                </a>
                <a href="<?php echo $social_links['github'] ?>">
                    <img src="<?php echo get_template_directory_uri() . "./assets/images/github.png" ?>" alt="hithub">
                </a>
                
            </div>
        </div>
    </section>
    <section class="home-section-2"> 
        <div class="container">
            <div class="about-me">
                <div class="about-me-img">
                    <?php if($hero_background): ?>
                        <img src="<?php echo $about_me_img['url'] ?>" .  alt="<?php echo $about_me_img['alt'] ?>">
                    <?php endif; ?>
                </div>
                <div class="about-me-content">
                    <h3 class="subtitle"><?php echo $about_subtitle ?></h3>
                    <h2 class="secondary_title"><?php echo $about_title ?></h2>
                    <div class="about-me-texts">
                    <?php echo $about_description ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


<?php
get_footer();

?>