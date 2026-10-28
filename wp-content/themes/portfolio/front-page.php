<?php get_header();


$homepage_id = get_option('page_on_front');
$intro_text = get_field('intro_text', $homepage_id);
$about_text = get_field('about_me', $homepage_id);
$about_img = get_field('about_img', $homepage_id);

$project_arguments = [
    'post_type' => 'project',
    'posts_per_page' => 3,
    'meta_query' => [
        [
            'key' => 'featured_project',
            'value' => '1',
            'compare' => '='
        ],
    ],
];
$projects_query = new WP_Query($project_arguments);
?>
<div class="top-content">
    <div class="hero-intro">
        <p class="hero-content hero_intro" id="">Hi I'm</p>
        <h1>Thomas Verzijl</h1>
        <h2 class="profession">Software developer</h2>
        <div class="hero-content">
            <?php
            $homepage_id = get_option('page_on_front');
            $intro_text  = get_field('intro_text', $homepage_id);

            if ($intro_text) {
                echo $intro_text;
            } else {
                echo 'intro text not found';
            }
            ?>
        </div>
        </p>
    </div>
    <div class="my-skills">
        <h2>My skills</h2>
        <div class="skills-container">
            <?php
            $skills = get_terms([
                'taxonomy' => 'skill',
                'hide_empty' => false,
            ]);

            if (is_wp_error($skills)) {
                echo '<p>Could not load skills.</p>';
            } else {
                foreach ($skills as $skill) {
                    echo '<div class="skill">' . esc_html($skill->name) . '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="projects-heading">
    <h2 id="top-projects-title">Some of my best work</h2>
    <div class="view-projects-link"><a class="view-projects-link" href="<?php echo esc_url(home_url('/projects/')); ?>">View all projects <span aria-hidden="true">→</span></a></div>
</div>
<div id="projects_container">
    <?php


    if ($projects_query->have_posts()) {
        while ($projects_query->have_posts()) {
            $projects_query->the_post();
            $project_skills = get_the_terms(get_the_ID(), 'skill');

            //project card
    ?>
            <a href="<?php the_permalink() ?>" class="project_card">
                <div class="project_image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                        echo '<div class="placeholder-image">Geen afbeelding</div>';
                    }
                    ?>
                </div>
                <h3><?php the_title(); ?></h3>

                <div class="skills-container skills-container-project">
                    <?php
                    if (!empty($project_skills) && !is_wp_error($project_skills)) {
                        foreach ($project_skills as $skill) {
                            echo '<div class="skill">' . esc_html($skill->name) . '</div>';
                        }
                    }
                    ?>
                </div>
            </a>


    <?php

        }
    } else {
        echo 'no projects found';
    }
    wp_reset_postdata();


    ?>
</div>


<div class="aboutme">
    <h2 id="about-me-title">About me</h2>
    <div class="about-me-content">
        <div class="about-me-copy">
            <?php
            if ($about_text) {
                echo $about_text;
            } else {
                echo '<p>Standaard over mij tekst...</p>';
            }
            ?>


        </div>
        <div class="about-me-img">
            <?php
            if ($about_img) {
                echo '<img src="' . $about_img . '"></img>';
            } else {
            ?>
                <div class="project_image" role="img" aria-label="About me image placeholder"></div>
                <p>image not found</p>
            <?php
            }
            ?>

        </div>



    </div>
    <?php get_footer(); ?>